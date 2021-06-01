<?php
session_start();

require_once "./View/_Partials/home.php";

require_once './Model/Entity/User.php';
require_once './Model/Entity/Story.php';
require_once './Model/Entity/Role.php';

require_once './Model/DB.php';
require_once './Model/Manager/Traits/ManagerTrait.php';
require_once './Controller/Traits/RenderViewTrait.php';

require_once './Model/Manager/StoryManager.php';
require_once './Model/Manager/UserManager.php';


use Controller\HomeController;
use Controller\StoryController;
use Controller\ToolsController;
use Controller\HelpController;
use Controller\ResourcesController;

if(isset($_GET['WJDR'])) {
    //Then, the user requests an action to be performed.
    switch($_GET['WJDR']) {


    // Management of function calls according to the url

        case 'tools':
            $controller = new \Controller\ToolsController();
            $controller->contract();

            $controller = new \Controller\ToolsController();
            $controller->name();

            $controller = new \Controller\ToolsController();
            $controller->dice();

            break;

        case 'help':
            $controller = new \Controller\HelpController();
            $controller->characterclasse();

            $controller = new \Controller\HelpController();
            $controller->charactercreation();

            $controller = new \Controller\HelpController();
            $controller->effects();

            $controller = new \Controller\HelpController();
            $controller->faq();

            $controller = new \Controller\HelpController();
            $controller->help();

            $controller = new \Controller\HelpController();
            $controller->rules();

            $controller = new \Controller\HelpController();
            $controller->shop();

            break;

        case 'resources':
            $controller = new \Controller\ResourcesController();
            $controller->alchemy();

            $controller = new \Controller\ResourcesController();
            $controller->battle();

            $controller = new \Controller\ResourcesController();
            $controller->bestiary();

            $controller = new \Controller\ResourcesController();
            $controller->magic();

            $controller = new \Controller\ResourcesController();
            $controller->mapp();

            $controller = new \Controller\ResourcesController();
            $controller->pnj();

            $controller = new \Controller\ResourcesController();
            $controller->story();
    }
}
else{
    $controller = new HomeController();
    $controller->showHome();
}

