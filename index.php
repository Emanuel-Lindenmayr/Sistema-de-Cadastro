<?php

include 'Controller/PessoaController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// "espinha dorsal" do MVC
switch($url) 
{
    case '/':
        echo "pagina inicial";
    break;
    
    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/form/save' :
        PessoaController::save();
    break;

    default:
        echo "error 404";
    break;
}