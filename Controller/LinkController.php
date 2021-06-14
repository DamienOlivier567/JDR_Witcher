<?php

namespace Controller;

use Controller\Traits\RenderViewTrait;
use Model\User\UserManager;

class LinkController{

    use RenderViewTrait;

    public function connect(){
        $this->render('connect.view', 'Connexion/Inscription');
    }
}
