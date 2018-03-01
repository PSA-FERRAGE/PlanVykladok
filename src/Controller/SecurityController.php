<?php

namespace App\Controller;

use App\Form\LoginForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="security_login")
     *
     * @param AuthenticationUtils $authUtils
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function loginAction(AuthenticationUtils $authUtils)
    {
        $error        = $authUtils->getLastAuthenticationError();
        $lastUsername = $authUtils->getLastUsername();
        $form         = $this->createForm(LoginForm::class, ['_username' => $lastUsername]);

        return $this->render(
            'security/login.html.twig',
            [
                'form'  => $form->createView(),
                'error' => $error,
            ]
        );
    }

    /**
     * @Route("/login_check", name="security_login_check")
     *
     * @throws \Exception
     */
    public function loginCheckAction()
    {
        throw new \Exception('Sem by sa to nemalo dostat pri odhlaseni!');
    }

    /**
     * @Route("/logout", name="security_logout")
     *
     * @throws \Exception
     */
    public function logoutAction()
    {
        throw new \Exception('Sem by sa to nemalo dostat pri odhlaseni!');
    }
}
