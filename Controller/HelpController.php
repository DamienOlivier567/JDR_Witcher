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
        header("Location: ../../View/Aidedejeu/characterclasse.view.php");
    }

    public function charactercreation(){
        $this->render('charactercreation', 'Créations Personnage');
        header("Location: ../../View/Aidedejeu/characterecreation.php");
    }

    public function effects(){
        $this->render('effets', 'Effets');
        header("Location: ../../View/Aidedejeu/effets.view.php");
    }

    public function faq(){
        $this->render('faq', 'FAQ');
        header("Location: ../../View/Aidedejeu/faq.view.php");
    }

    public function help(){
        $this->render('help', 'Aides');
        header("Location: ../../View/Aidedejeu/help.view.php");
    }

    public function rules(){
        $this->render('rules', 'Règles alternative');
        header("Location: ../../View/Aidedejeu/rules.view.php");
    }

    public function shop(){
        $this->render('shop', 'Magasins');
        header("Location: ../../View/Aidedejeu/shop.view.php");
    }
}
