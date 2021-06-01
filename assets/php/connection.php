<?php
ini_set("display_errors", E_ALL);

include "functions.php";
require_once "../../Model/DB.php";

if (isset($_POST["pseudo"], $_POST["password"])) {
    $bdd = new DB();
    $request = $bdd::getInstance();

    $pseudo = sanitize($_POST['pseudo']);
    $password = sanitize($_POST['password']);

    $request = $bdd->getDbLink();
    // I get the name of the user
    $stmt = $request->prepare("SELECT * FROM user WHERE pseudo = :pseudo");
    $stmt->bindValue(":pseudo", $pseudo);
    $stmt->execute();
    foreach ($stmt->fetchAll() as $user) {
        // I check that the password encrypted on my database that I retrieved using the '$ user [' password ']' loop corresponds to the password entered by the user
        if (password_verify($password, $user['password'])) {
            // If the 2 mdp correspond then we open the session and we store the user's data in a session.
            session_start();
            $_SESSION['id'] = $user['id'];
            $_SESSION['pseudo'] = $user['pseudo'];
            $_SESSION['password'] = $password;
            $_SESSION['email'] = $user['email'];
            $_SESSION['role_fk'] = $user['role_fk'];

            header("Location: ../../index.php");
        }
        else {
            header("Location: ../../View/Liens/connect.php?error=2");
        }
    }
}
else {
    header("Location: ../../View/Liens/connect.php?error=3");
}
