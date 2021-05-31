<?php

use Model\Manager\Traits\ManagerTrait;
class confirmation{

    use ManagerTrait;

    public function __construct($email, $pseudo){
        $this->confirmInscription($email, $pseudo);
    }

    function confirmInscription($email, $pseudo){
        if(isset($email, $token) AND !empty($email && $pseudo)) {
            $user = $this->db->prepare("SELECT * FROM witcher_jdr.user WHERE email = :email AND pseudo = :pseudo");
            $user->bindValue(":email", $_GET["email"]);
            $user->bindValue(":pseudo", $_GET["pseudo"]);
            $user->execute();
            $userExist = $user->rowCount();

            if ($userExist === 1) {
                $user = $user->fetch();
                if ($user["activate"] === '0') {
                    $confirm = $this->db->prepare("UPDATE witcher_jdr.user SET user.id = 1 WHERE email=:email AND pseudo=:pseudo");
                    $confirm->bindValue(":email", $_GET["email"]);
                    $confirm->bindValue("pseudo", $_GET["pseudo"]);
                    $confirm->execute();

                    header("Location: ../index.php?error=Votre compte à bien été confirmé&color=green");
                }
                else {
                    header("Location: ../index.php?error=Votre compte est déjà confirmé&color=green");
                }
            }
            else {
                header("Location: ../index.php?error=L'utilisateur ne correspond pas ou n'existe pas !&color=red");
            }
        }
    }
}
