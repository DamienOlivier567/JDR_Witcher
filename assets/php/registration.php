<?php

include "functions.php";
require "../../Model/DB.php";

if (isset($_POST["pseudo"], $_POST["email"], $_POST["password"])) {
    $bdd = DB::getInstance();

    $pseudo = sanitize($_POST["pseudo"]);
    $password = sanitize($_POST["password"]);
    $email = trim($_POST["email"]);

    $encryptedPassword = password_hash($password, PASSWORD_BCRYPT);

    $requete = $bdd->prepare("SELECT * FROM witcherjdr.user WHERE email = '" . $email . "' OR pseudo = '" . $pseudo ."'");
    $state = $requete->execute();

    if ($state) {
        foreach ($requete->fetchAll() as $user) {
            $mailUse = $user['email'];
            $pseudoUse = $user['pseudo'];

            if ($mailUse === $email || $pseudoUse === $pseudo) {
                header("Location: ../../View/Liens/registration.php?error=0");
            }
        }
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $maj = preg_match('@[A-Z]@', $password);
            $min = preg_match('@[a-z]@', $password);
            $number = preg_match('@[0-9]@', $password);

            if($maj && $min && $number && strlen($password) > 8) {
                // People who register automatically have role 2: viewer.
                $sql = $bdd->prepare("INSERT INTO witcherjdr.user (pseudo, email, password, role_fk) 
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