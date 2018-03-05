$(document).ready(function () {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('#sidebarCollapse').on('click', function () {
        // open or close navbar
        $('#sidebar, #topNav, #content').toggleClass('active');
        // close dropdowns
        $('.collapse.in').toggleClass('in');
        // and also adjust aria-expanded attributes we use for the open/closed arrows
        // in our CSS
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');

        if ($('#sidebar').hasClass('active')) {
            $('#sidebarCollapse').attr('aria-expanded', 'false');
        } else {
            $('#sidebarCollapse').attr('aria-expanded', 'true');
        }
    });

});
