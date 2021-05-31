<?php

namespace Controller;

use Controller\Traits\RenderViewTrait;
use Model\Manager\StoryManager;
use Model\User\UserManager;

class HelpController{
    use RenderViewTrait;

    /**
     * display the page
     */
    public function characterclasse() {
        $this->render('characterclasse', 'Classe Personnage');
    }

    public function charactercreation(){
        $this->render('charactercreation', 'Créations Personnage');
    }

    public function effects(){
        $this->render('effets', 'Effets');
    }

    public function faq(){
        $this->render('faq', 'FAQ');
    }

    public function help(){
        $this->render('help', 'Aides');
    }

    public function rules(){
        $this->render('rules', 'Règles alternative');
    }

    public function shop(){
        $this->render('shop', 'Magasins');
    }
}
