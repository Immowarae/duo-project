<?php
spl_autoload_register(function ($class){
    require_once lcfirst(str_replace('\\', '/', $class)) . '.php';
});

session_start();

if (array_key_exists('route', $_GET))
{
    switch ($_GET['route'])
    {
        case 'home':
            $controller = new \controllers\HomeController();
            $controller->home();
            break;
    }
}
else
{
    header ('Location: index.php?route=home');
    exit;
}