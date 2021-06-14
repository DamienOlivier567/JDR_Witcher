<?php

namespace Controller;

use Controller\Traits\RenderViewTrait;
use Model\DB;
use Model\User\UserManager;


class UsersController{
    use RenderViewTrait;

    /**
     * display the page
     */
    public function connect() {
        $this->render('connect', 'Connection/Inscription');
    }

    public function delete(){
        $this->render('deleteUser', 'Supprimer un compte');
    }

}
