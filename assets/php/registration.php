<?php

include "functions.php";
require "../../Model/DB.php";
use Model\DB;

if (isset($_POST["pseudoInscript"], $_POST["emailInscript"], $_POST["passwordInscript"], $_POST["passwordConfirmInscript"])) {
    $bdd = new DB();
    $bdd::getInstance();
    $db = $bdd->getDbLink();

    $pseudo = sanitize($_POST["pseudoInscript"]);
    $password = sanitize($_POST["passwordInscript"]);
    $passwordConfirm = sanitize($_POST["passwordConfirmInscript"]);
    $email = trim($_POST["emailInscript"]);

    $encryptedPassword = password_hash($password, PASSWORD_BCRYPT);


    $requete = $db->prepare("SELECT * FROM user WHERE email = '". $email ."' OR pseudo = '" . $pseudo . "'");
    $state = $requete->execute();


    if ($state) {
        foreach ($requete->fetchAll() as $user) {
            $mailUse = $user['email'];
            $pseudoUse = $user['pseudo'];

            if ($mailUse === $email || $pseudoUse === $pseudo) {
                header("Location: ../../View/Liens/registration.php?error=0");
            }
        }
        if ($password!==$passwordConfirm){
            header("Location: /index.php?WJDR=accueil&error=1");
        }
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $maj = preg_match('@[A-Z]@', $password);
            $min = preg_match('@[a-z]@', $password);
            $number = preg_match('@[0-9]@', $password);

            if($maj && $min && $number && strlen($password) > 8) {
                // People who register automatically have role 2: viewer.
                $sql = $db->prepare("INSERT INTO witcherjdr.user (pseudo, email, password, role_fk) 
                        VALUES (:pseudo, :email, :password, :role_fk)");

                $sql->bindValue(":pseudo", $pseudo);
                $sql->bindValue(":email", $email);
                $sql->bindValue(":password", $encryptedPassword);
                $sql->bindValue(":role_fk", 2);

                $sql->execute();
                header("Location: /index.php?WJDR=accueil&success=0");
            }
            else {
                header("Location: ../../View/Liens/connect.view.php?error=5");
            }
        }
    }
}
else {
    header("Location: ../../View/Liens/connect.view.php?error=4");
}