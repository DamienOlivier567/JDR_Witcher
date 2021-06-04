<?php


namespace Controller;
use Controller\Traits\RenderViewTrait;

class HomeController {
use RenderViewTrait;

    public function showHome(){
        $this->render("home.view", "home", []);
    }

}