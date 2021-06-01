<!doctype html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/351e9300a0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../assets/css/header.css" xmlns="http://www.w3.org/1999/html">
    <title>Document</title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="wrapper">
            <a href="../../index.php" <h1 class="logo"><img src="../../assets/img/logo.jpg" alt="logo"></h1></a>
        </div>
        <nav class="navbar">
            <ul class="nav-menu">
                <li class="nav-item has-dropdown">
                    <a href="#">Aide de jeu</a>
                    <ul class="item-dropdown">
                        <li class="sub-item"><a href="/View/Aidedejeu/charactercreation.php">Création personnages</a></li>
                        <li class="sub-item"><a href="/View/Aidedejeu/characterclasse.php">Classes personnages</a></li>
                        <li class="sub-item"><a href="/View/Aidedejeu/rules.php">Règles alternatives</a></li>
                        <li class="sub-item"><a href="/View/Aidedejeu/help.php">Aides de jeu</a></li>
                        <li class="sub-item"><a href="/View/Aidedejeu/effets.php">Effets</a></li>
                        <li class="sub-item"><a href="/View/Aidedejeu/shop.php">Magasins</a></li>
                        <li class="sub-item"><a href="/View/Aidedejeu/faq.php">FAQ</a></li>
                    </ul>
                </li>


                <li class="nav-item has-dropdown">
                    <a href="#">Ressources</a>
                    <ul class="item-dropdown">
                        <li class="sub-item"><a href="/View/Ressources/pnj.php">Fiches PNJ</a></li>
                        <li class="sub-item"><a href="/View/Ressources/bestiary.php">Bestiaire/Liste de monstre</a></li>
                        <li class="sub-item"><a href="/View/Ressources/magic.php">Magie</a></li>
                        <li class="sub-item"><a href="/View/Ressources/alchemy.php">Alchimie</a></li>
                        <?php
                        if (isset($_SESSION["id"])){
                          ?>
                            <li class="sub-item"><a href="/View/Ressources/story.php">Campagnes</a></li>
                            <li class="sub-item"><a href="/View/Ressources/mapp.php">Mappemondes</a></li>
                            <li class="sub-item"><a href="/View/Ressources/battle.php">Battlemaps</a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </li>

                <li class="nav-item has-dropdown">
                    <a href="#">Outils </a>
                    <ul class="item-dropdown">
                        <li class="sub-item"><a href="/View/Outils/diceroller.php">Lancer de dés</a></li>
                        <li class="sub-item"><a href="/View/Outils/namegenerator.php">Générateur de nom</a></li>
                        <li class="sub-item"><a href="/View/Outils/contractgenerator.php">Générateur contrat</a></li>
                    </ul>
                </li>

                <li class="nav-item has-dropdown">
                    <a href="#">Liens </a>
                    <ul class="item-dropdown">
                        <li class="sub-item"><a href="/View/Liens/connect.php">Connexion/Inscription</a></li>
                        <?php
                        if (isset($_SESSION["id"])){
                        ?>
                            <li class="sub-item"><a href="../../tchat/index.php">Vatt'Ghern-Blog</a></li>
                            <li class="sub-item"><a href="#">Kaer morhen</a></li>
                            <?php
                        }
                        ?>
                        <li class="sub-item"><a href="#">Mentions Légales</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <?php
        if (isset($_SESSION['id'])) {
            ?>
            <p class="menu" id="pseudo"><i class="fas fa-user-circle"></i><?= $_SESSION['pseudo']?></p>
            <a class="menu" href="../../assets/php/disconnection.php"><i class="fas fa-sign-out-alt"></i></a>
            <?php
        }
        ?>

    </div>
</header>

</body>
</html>



