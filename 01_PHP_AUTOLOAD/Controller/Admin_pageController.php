<?php

Class Admin_pageController
{
    public static function admin_page()
    {
        
        //view
        require_once './Templates/header.php';
        require_once './Templates/admin_page.php';
        require_once './Templates/footer.php';
    }
}