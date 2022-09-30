<?php

namespace Controllers;

class HomeController
{
    public function home()
    {
        $view = 'views/front/home.php';
        include_once 'views/template.php';
    }
}

?>