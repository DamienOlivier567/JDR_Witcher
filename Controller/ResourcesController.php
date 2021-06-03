<?php

namespace Controller;

use Controller\Traits\RenderViewTrait;
use Model\Manager\StoryManager;
use Model\User\UserManager;

class ResourcesController{
    use RenderViewTrait;

    public function alchemy(){
        $this->render('alchemy', 'Alchimie');
    }

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

    public function battle(){
        $this->render('battle', 'BattleMapp');
    }

    public function mapp(){
        $this->render('mapp', 'MappMondes');
    }
}