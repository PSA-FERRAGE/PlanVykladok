<?php

namespace App\Controller\Api;

use App\Entity\Kamion;
use App\Form\KamionForm;
use Doctrine\ORM\ORMException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class KamionController extends BaseController
{
    /**
     * @Method("POST")
     * @Route("api/kamiony", name="api_vytvor_kamion")
     *
     * @param Request                       $request
     * @param AuthorizationCheckerInterface $authChecker
     */
    public function newAction(Request $request, AuthorizationCheckerInterface $authChecker)
    {
        if (false === $authChecker->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Unable to access this page!');
        }

        $kamion = new Kamion();
        $form   = $this->createForm(KamionForm::class, $kamion);

        $this->processForm($request, $form);
        if (!$form->isValid()) {
            $this->throwApiProblemValidationException($form);
        }

        try {
            $em = $this->getDoctrine()->getManager();
            $em->persist($kamion);
            $em->flush();
            $response = new Response('It worked. Believe me - I\'m an API', 201);
            $response->headers->set('Location', '/some/programmer/url');

            return $response;
        } catch (ORMException $e) {
            $this->throwApiProblemValidationException($form);
        }
    }

    public function updateAction()
    {

    }

    public function showAction()
    {

    }

    public function listAction()
    {

    }

    public function deleteAction()
    {

    }
}
