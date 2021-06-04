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
    <link rel="stylesheet" href="../../assets/css/shoparticles.css">
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
        <td>Type</td>
        <td>Effets</td>
        <td>Durée</td>
        <td>Toxi</td>
        <td>Race</td>
        <td>Descriptions</td>
        <td>Craft</td>
    </tr>
    </thead>

    <!--body-->

    <tbody>

    <!--one-->

    <tr>

        <td>Hirondelle</td>
        <td>Potions</td>
        <td>+3PS/Round si pas de dégât ce round</td>
        <td>20 rounds</td>
        <td>50%</td>
        <td>Sorceleur</td>
        <td>
            <button>Description</button>
        </td>
        <td>
            <button>Craft</button>
        </td>
    </tr>

    <!--two-->

    <tr>

        <td>Decoction de Raffard le Blanc</td>
        <td>Potions</td>
        <td>Redonne 1PS par round</td>
        <td>4D6 Rounds</td>
        <td>50%</td>
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

        <td>Décoction de Troll</td>
        <td>Decoctions</td>
        <td>Régénérez 5 PS par round</td>
        <td>30mn</td>
        <td>75%</td>
        <td>Sorceleur</td>
        <td>
            <button>Description</button>
        </td>
        <td>
            <button>Craft</button>
        </td>
    </tr>

    <!--four-->

    <tr>

        <td>Huile contre les ogroïdes</td>
        <td>Huiles</td>
        <td>+5 dégâts contre les ogroïdes</td>
        <td>30mn</td>
        <td>0</td>
        <td>Sorceleur</td>
        <td>
            <button>Description</button>
        </td>
        <td>
            <button>Craft</button>
        </td>
    </tr>

    <!--five-->

    <tr>

        <td>Huile contre les vampires</td>
        <td>Huiles</td>
        <td>+5 dégâts contre les vampires</td>
        <td>30mn</td>
        <td>0</td>
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

        <td>Décoction de Loup-garou</td>
        <td>Decoctions</td>
        <td>Courir ne dépense pas d'END</td>
        <td>30mn</td>
        <td>75%</td>
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

