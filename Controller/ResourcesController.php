<?php

namespace Controller;

use Controller\Traits\RenderViewTrait;
use Model\Manager\StoryManager;
use Model\User\UserManager;

class ResourcesController{
    use RenderViewTrait;

    public function bestiary(){
        $this->render('bestiary', 'Bestiaire');
    }

    public function magic(){
        $this->render('magic', 'Magie');
    }

    public function pnj(){
        $this->render('pnj', 'Fiche PNJ');
    }

    public function story(){
        $this->render('story', 'Campagnes');
    }
}