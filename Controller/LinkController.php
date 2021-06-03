<?php

namespace Controller;

use Controller\Traits\RenderViewTrait;
use Model\Manager\StoryManager;
use Model\User\UserManager;

class LinkController{

    use RenderViewTrait;

    public function connect(){
        $this->render('connect', 'Connexion/Inscription');
    }
}