<?php
session_start();
?>
<!doctype html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/351e9300a0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../assets/css/style.css" xmlns="http://www.w3.org/1999/html">
    <title><?= $title ?></title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="wrapper">
            <a href="../../index.php" <h1 class="logo"><img src="../../assets/img/logo.jpg" alt="logo"></h1></>
        </div>

        <nav class="navbar">
            <ul class="nav-menu">
                <li class="nav-item has-dropdown">
                    <a href="#">Aide de jeu</a>
                    <ul class="item-dropdown">
                        <li class="sub-item"><a href="/View/Aidedejeu/charactercreation.view.php">Création personnages</a></li>
                        <li class="sub-item"><a href="/View/Aidedejeu/characterclasse.view.php">Classes personnages</a></li>
                        <li class="sub-item"><a href="/View/Aidedejeu/rules.view.php">Règles alternatives</a></li>
                        <li class="sub-item"><a href="/View/Aidedejeu/help.view.php">Aides de jeu</a></li>
                        <li class="sub-item"><a href="/View/Aidedejeu/effets.view.php">Effets</a></li>
                        <li class="sub-item"><a href="/View/Aidedejeu/shop.view.php">Magasins</a></li>
                        <li class="sub-item"><a href="/View/Aidedejeu/faq.view.php">FAQ</a></li>
                    </ul>
                </li>

                <li class="nav-item has-dropdown">
                    <a href="#">Ressources</a>
                    <ul class="item-dropdown">
                        <li class="sub-item"><a href="/View/Ressources/pnj.view.php">Fiches PNJ</a></li>
                        <li class="sub-item"><a href="/View/Ressources/bestiary.view.php">Bestiaire/Liste de monstre</a></li>
                        <li class="sub-item"><a href="/View/Ressources/magic.view.php">Magie</a></li>
                        <li class="sub-item"><a href="/View/Ressources/alchemy.view.php">Alchimie</a></li>
                        <?php
                        if (isset($_SESSION["id"])){
                          ?>
                            <li class="sub-item"><a href="/View/Ressources/story.view.php">Campagnes</a></li>
                            <li class="sub-item"><a href="/View/Ressources/mapp.view.php">Mappemondes</a></li>
                            <li class="sub-item"><a href="/View/Ressources/battle.view.php">Battlemaps</a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </li>

                <li class="nav-item has-dropdown">
                    <a href="#">Outils </a>
                    <ul class="item-dropdown">
                        <li class="sub-item"><a href="/View/Outils/diceroller.view.php">Lancer de dés</a></li>
                        <li class="sub-item"><a href="/View/Outils/namegenerator.view.php">Générateur de nom</a></li>
                        <li class="sub-item"><a href="/View/Outils/contractgenerator.view.php">Générateur contrat</a></li>
                    </ul>
                </li>

                <li class="nav-item has-dropdown">
                    <a href="#">Liens </a>
                    <ul class="item-dropdown">
                        <?php
                        if (isset($_SESSION["id"])){
                        ?>
                            <li class="sub-item"><a href="/View/Liens/deleteUser.php">Supprimer mon Compte</a></li>
                            <li class="sub-item"><a href="https://discord.gg/2N2fTBwp">Kaer morhen</a></li>
                            <?php
                        }
                        else {
                            ?>
                            <li class="sub-item"><a href="/View/Liens/connect.view.php">Connexion/Inscription</a></li>
                        <?php
                        }
                        ?>
                        <li class="sub-item"><a href="/View/Liens/legalnotice.php">Mentions Légales</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <?php
        if (isset($_SESSION['id'])) {
            ?>
            <a class="menu" href="../../assets/php/disconnection.php"><i class="fas fa-sign-out-alt"></i></a>
            <?php
        }
        ?>
    </div>
</header>

</body>
</html>