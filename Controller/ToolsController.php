<?php

namespace Controller;

use Controller\Traits\RenderViewTrait;
use Model\Manager\StoryManager;
use Model\User\UserManager;


class ToolsController{
    use RenderViewTrait;

    /**
    * display the page
    */
    public function contract() {
        $this->render('contractgenerator', 'Generateur de contrat');
    }

    public function name(){
        $this->render('namegenerator', 'Generateur de non');
    }

    public function dice(){
        $this->render('diceroller', 'Lance de dés');
    }
}
