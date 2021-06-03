<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . "./View/_Partials/home.view.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "./View/_Partials/header.view.php";

require_once $_SERVER['DOCUMENT_ROOT'] . './Model/Entity/User.php';
require_once $_SERVER['DOCUMENT_ROOT'] . './Model/Entity/Story.php';
require_once $_SERVER['DOCUMENT_ROOT'] . './Model/Entity/Role.php';

require_once $_SERVER['DOCUMENT_ROOT'] . './Model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . './Model/Manager/Traits/ManagerTrait.php';
require_once $_SERVER['DOCUMENT_ROOT'] . './Controller/Traits/RenderViewTrait.php';

require_once $_SERVER['DOCUMENT_ROOT'] . './Model/Manager/StoryManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . './Model/Manager/UserManager.php';

use Controller\HomeController;
use Controller\ToolsController;
use Controller\HelpController;
use Controller\ResourcesController;

if(isset($_GET['WJDR'])) {
    //Then, the user requests an action to be performed.
    switch($_GET['WJDR']) {

        // Management of function calls according to the url

        case 'tools':
            $controller = new ToolsController();
            $controller->contract();

            $controller = new ToolsController();
            $controller->name();

            $controller = new ToolsController();
            $controller->dice();

            break;

        case 'help':
            $controller = new HelpController();
            $controller->characterclasse();

            $controller = new HelpController();
            $controller->charactercreation();

            $controller = new HelpController();
            $controller->effects();

            $controller = new HelpController();
            $controller->faq();

            $controller = new HelpController();
            $controller->help();

            $controller = new HelpController();
            $controller->rules();

            $controller = new HelpController();
            $controller->shop();

            break;

        case 'resources':
            $controller = new ResourcesController();
            $controller->alchemy();

            $controller = new ResourcesController();
            $controller->battle();

            $controller = new ResourcesController();
            $controller->bestiary();

            $controller = new ResourcesController();
            $controller->magic();

            $controller = new ResourcesController();
            $controller->mapp();

            $controller = new ResourcesController();
            $controller->pnj();

            $controller = new ResourcesController();
            $controller->story();
    }
}
else{
    $controller = new HomeController();
    $controller->showHome();
}

