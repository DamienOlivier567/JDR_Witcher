<?php

use Controller\Traits\RenderViewTrait;
use Model\Manager\StoryManager;
use Model\User\UserManager;

class Render{
    /**
     * display the right page - set title - give data in array
     * @param string $view
     * @param string $title
     * @param array $var
     */
    public function __construct(string $view, string $title, array $var = null) {
        ob_start();
        require_once $_SERVER['DOCUMENT_ROOT'] . "/View/" . $view . ".php";
        $html = ob_get_clean();
        require_once $_SERVER['DOCUMENT_ROOT'] . "/View/_Partials/header.php";
    }
}