<?php

namespace Controller;

use Controller\Traits\RenderViewTrait;
use Model\User\UserManager;

class HelpController{
    use RenderViewTrait;

    /**
     * display the page
     */
    public function characterclasse() {
        $this->render('characterclasse.view', 'Classe Personnage');
        header("Location: ../../View/Aidedejeu/characterclasse.view.php");
    }

    public function charactercreation(){
        $this->render('charactercreation.view', 'Créations Personnage');
        header("Location: ../../View/Aidedejeu/characterecreation.php");
    }

    public function effects(){
        $this->render('effets.view', 'Effets');
        header("Location: ../../View/Aidedejeu/effets.view.php");
    }

    public function faq(){
        $this->render('faq.view', 'FAQ');
        header("Location: ../../View/Aidedejeu/faq.view.php");
    }

    public function help(){
        $this->render('help.view', 'Aides');
        header("Location: ../../View/Aidedejeu/help.view.php");
    }

    public function rules(){
        $this->render('rules.view', 'Règles alternative');
        header("Location: ../../View/Aidedejeu/rules.view.php");
    }

    public function shop(){
        $this->render('shop.view', 'Magasins');
        header("Location: ../../View/Aidedejeu/shop.view.php");
    }
}
