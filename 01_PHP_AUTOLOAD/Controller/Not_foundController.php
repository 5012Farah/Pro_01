<?php

class Not_foundController
{
    public static function NotFound()
    {
        
        //View
        require_once './Templates/header.php';
        require_once './Templates/not_found.php';
        require_once './Templates/footer.php';

    }
}