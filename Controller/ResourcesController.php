<?php

namespace Controller;

use Controller\Traits\RenderViewTrait;
use Model\User\UserManager;

class ResourcesController{
    use RenderViewTrait;

    public function alchemy(){
        $this->render('alchemy.view', 'Alchimie', []);
    }

    public function bestiary(){
        $this->render('bestiary.view', 'Bestiaire', []);
    }

    public function magic(){
        $this->render('magic.view', 'Magie', []);
    }

    public function pnj(){
        $this->render('pnj.view', 'Fiche PNJ', []);
    }

    public function story(){
        $this->render('story.view', 'Campagnes', []);
    }

    public function battle(){
        $this->render('battle.view', 'BattleMapp', []);
    }

    public function mapp(){
        $this->render('mapp.view', 'MappMondes', []);
    }
}