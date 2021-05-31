<?php

namespace Controller;

use Controller\Traits\RenderViewTrait;
use Exception;
use Model\Entity\Article;
use Model\Manager\ArticleManager;
use Model\User\UserManager;
use Model\Entity\User;

class BlogController{

    use RenderViewTrait;

    /**
     * display the blog page
     */
    public function blogPage() {
        $user = 'Anonymous';
        if(isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
        }

        $this->render('blog', 'Blog', [
            'user' => $user,
        ]);
    }
}
