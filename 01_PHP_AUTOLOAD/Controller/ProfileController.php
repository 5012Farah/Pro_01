<?php 

class ProfileController
{
    public static function user_profile()
    {

        // View 
        require_once './Templates/header.php';
        require_once './Templates/user_profile.php';
        require_once './Templates/footer.php';
    }
}