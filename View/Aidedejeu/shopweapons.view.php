<?php
require_once "../_Partials/header.view.php"
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../assets/css/shopweapons.css">
    <title>Magasins</title>
</head>
<body>

<div class="container table">

    <a class="title">

        <a href="shop.view.php" <h1>Magasins </h1></a>

    </div>

    <table>
        <!--header-->
        <thead>
        <tr>

            <td>Nom</td>
            <td>Catégorie</td>
            <td>Dégats</td>
            <td>Poids</td>
            <td>Prix</td>
            <td>Race</td>
            <td>Descriptions</td>
            <td>Craft</td>
        </tr>
        </thead>

        <!--body-->

        <tbody>

        <!--one-->

        <tr>

            <td>Epée de fer</td>
            <td>Epée</td>
            <td>2D6+2</td>
            <td>1</td>
            <td>150</td>
            <td>Humains</td>
            <td>
                <button>Description</button>
            </td>
            <td>
                <button>Craft</button>
            </td>
        </tr>

        <!--two-->

        <tr>

            <td>Epée de chevalier</td>
            <td>Epée</td>
            <td>2D6+4</td>
            <td>2</td>
            <td>270</td>
            <td>Humains</td>
            <td>
                <button>Description</button>
            </td>
            <td>
                <button>Craft</button>
            </td>
        </tr>

        <!--three-->

        <tr>

            <td>Gleddyf</td>
            <td>Epée</td>
            <td>3D6+2</td>
            <td>3</td>
            <td>285</td>
            <td>Humains</td>
            <td>
                <button>Description</button>
            </td>
            <td>
                <button>Craft</button>
            </td>
        </tr>

        <!--four-->

        <tr>

            <td>Épée de chasseur de sorcières</td>
            <td>Epée</td>
            <td>5D6</td>
            <td>1.5</td>
            <td>360</td>
            <td>Humains</td>
            <td>
                <button>Description</button>
            </td>
            <td>
            </td>
        </tr>

        <!--five-->

        <tr>

            <td>Epée d'acier de witcher</td>
            <td>Epée</td>
            <td>4D6+2</td>
            <td>2</td>
            <td>247</td>
            <td>Sorceleur</td>
            <td>
                <button>Description</button>
            </td>
            <td>
                <button>Craft</button>
            </td>
        </tr>

        <!--six-->

        <tr>

            <td>Epée d'argent de witcher</td>
            <td>Epée</td>
            <td>1D6+2</td>
            <td>1</td>
            <td>247</td>
            <td>Sorceleur</td>
            <td>
                <button>Description</button>
            </td>
            <td>
                <button>Craft</button>
            </td>

        </tr>

        </tbody>

    </table>

</div>
</body>
</html>
