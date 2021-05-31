<?php

namespace Controller;

use Controller\Traits\RenderViewTrait;
use Exception;
use Model\Entity\Story;
use Model\Manager\StoryManager;
use Model\User\UserManager;
use Model\Entity\User;

class StoryController {

    use RenderViewTrait;

    /**
     * Display the list of article
     */
    public function articles() {
        $manager = new StoryManager();
        $articles = $manager->getAll();

        $this->render('articles', 'Articles', [
            'articles' => $articles,
        ]);
    }

    /**
     * @param $id
     * @return Story
     */
    public function article($id): Story {
        $manager = new StoryManager();
        $articles = $manager->getArticle($id);

        $this->render('article.comment', 'Story', [
            'articles' => $articles,
        ]);
        return $articles;
    }

    /**
     * Add a new article
     * @param $fields
     */
    public function addArticle($fields) {
        if(isset($fields['title'],$fields['content'], $fields['picture'], $fields['user_fk'])) {
            $userManager = new UserManager();
            $articleManager = new StoryManager();

            $title = htmlentities($fields['title']);
            $content = htmlentities($fields['content']);
            $picture = htmlentities($fields['picture']);
            $user_fk = intval($fields['user_fk']);

            $user_fk = $userManager->getUser($user_fk);
            if($user_fk->getId()) {
                $article = new Story(null, $title, $content, $picture, $user_fk);
                $articleManager->add($article);
            }
        }

        $this->render('add.article', 'Ajouter un article');
    }

    /**
     * Update a article
     * @param $fields
     */
    public function updateArticle($fields) {
        if (isset($fields['id'], $fields['title'], $fields['content'], $fields['picture'], $fields['user_fk'])) {
            $userManager = new UserManager();
            $articleManager = new StoryManager();

            $id = intval($fields['id']);
            $title = htmlentities($fields['title']);
            $content = htmlentities($fields['content']);
            $picture = htmlentities($fields['picture']);
            $user_fk = intval($fields['user_fk']);

            $user_fk = $userManager->getUser($user_fk);
            if ($user_fk->getId()) {
                $article = new Story($id, $title, $content, $picture);
                $articleManager->update($article);
            }
        }

        $this->render('update.article', 'Modifier un article');
    }

    /**
     * Delete a article
     * @param $fields
     */

    public function deleteArticle($fields) {
        if (isset($fields['id'], $fields['user_fk'])) {
            $userManager = new UserManager();
            $articleManager = new StoryManager();

            $id = intval($fields['id']);
            $user_fk = intval($fields['user_fk']);

            $user_fk = $userManager->getUser($user_fk);
            if ($user_fk->getId()) {
                $article = new Story($id);
                $articleManager->delete($article);
            }
        }
        $this->render('delete.article', 'Supprimer un article');
    }
}