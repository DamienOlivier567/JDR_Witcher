<?php
session_start();

require_once "./View/_Partials/home.php";

require_once './Model/Entity/User.php';
require_once './Model/Entity/Article.php';
require_once './Model/Entity/Comment.php';
require_once './Model/Entity/Role.php';

require_once './Model/DB.php';
require_once './Model/Manager/Traits/ManagerTrait.php';
require_once './Controller/Traits/RenderViewTrait.php';

require_once './Model/Manager/ArticleManager.php';
require_once './Model/Manager/UserManager.php';
require_once './Model/Manager/CommentManager.php';

require_once './Controller/BlogController.php';

use Controller\CommentController;
use Controller\HomeController;
use Controller\ArticleController;

if(isset($_GET['WJDR'])) {
    //Then, the user requests an action to be performed.
    switch($_GET['WJDR']) {


    // Management of function calls according to the url
        case 'blog':
            $controller = new \Controller\BlogController();
            $controller->blogPage();
            break;

    }
}
else{
    $controller = new HomeController();
    $controller->showHome();
}
