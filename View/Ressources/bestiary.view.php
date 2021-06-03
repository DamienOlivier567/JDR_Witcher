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
    <link rel="stylesheet" href="../../assets/css/bestiary.css">
    <script src="https://kit.fontawesome.com/351e9300a0.js" crossorigin="anonymous"></script>
    <title>Bestiaire</title>
</head>
<body>
<div class="container table">

    <a class="title">

        <h1>Bestiare </h1>

</div>

<table>
    <!--header-->
    <thead>
    <tr>

        <td>Representation</td>
        <td>Nom</td>
        <td>Caractéristiques</td>
        <td>Compétences</td>
        <td>Armure</td>
        <td>Arme Nom,DMG,Effet,Att/tour</td>
        <td>Vulnérabilités</td>
        <td>Capacités</td>
    </tr>
    </thead>

    <!--body-->

    <tbody>

    <!--1-->

    <tr>

        <td>
            <img src="../../assets/img/monster/archer_scoia'tel.jpg" width="150px" height="200px">
        </td>
        <td>
            ARCHERS SCOIA’TAEL
        </td>
        <td>
            INT: 4<br>
            RÉF: 6<br>
            DEX: 7<br>
            COR: 5<br>
            VIT: 7<br>
            EMP: 3<br>
            TECH: 4<br>
            VOL: 6<br>
            CHA: 0<br>
            ÉTOU: 5<br>
            COU: 21<br>
            SAUT: 4<br>
            END: 25<br>
            ENC: 50<br>
            RÉC: 5<br>
            PS: 25<br>
            VIG: 0<br>
        </td>
        <td>
            Survie: 10
            Vigilance: 9
            Bagarre: 4
            Escrime: 6
            Esquive/Évasion: 7
            Lames courtes: 6
            Archerie: 8
            Athlétisme: 7
            Furtivité: 8
            Résilience: 7
            Courage: 6
            Résistance à la contrainte: 6
            Résistance à la magie: 4
        </td>
        <td>
            5
        </td>
        <td>
            Fauchon de chasseur,3d6,Aucun,1
            Dague,1d6,Aucun,1
            Couteaux de lancer,1d6,POR: 20 m,1
            Arc long,4d6,POR: 200 m,1
        </td>
        <td>
            Venin du pendu
        </td>
        <td>
            Spécialistes de l’embuscade
        </td>

    </tr>

    <!--2-->

    <tr>

        <td>
            <img src="../../assets/img/monster/bandit.jpg" width="150px" height="200px">
        </td>

        <td>
            BANDITS
        </td>
        <td>
            INT: 3<br>
            RÉF: 6<br>
            DEX: 5<br>
            COR: 5<br>
            VIT: 4<br>
            EMP: 3<br>
            TECH: 4<br>
            VOL: 4<br>
            CHA: 0<br>
            ÉTOU: 4<br>
            COU: 12<br>
            SAUT: 2<br>
            END: 20<br>
            ENC: 50<br>
            RÉC: 4<br>
            PS: 20<br>
            VIG: 0<br>
        </td>
        <td>
            Survie: 5
            Vigilance: 6
            Bagarre: 6
            Escrime: 6
            Esquive/Évasion: 4
            Lames courtes: 5
            Arbalète: 4
            Athlétisme: 4
            Furtivité: 3
            Résilience: 5
            Courage: 7
            Résistance à la contrainte: 5
            Résistance à la magie: 4
        </td>
        <td>
            5
        </td>
        <td>
            Épée longue de fer,2d6+2,Aucun,1
            Dague,1d6,Aucun,1
            Arbalète de main,2d6+2,POR:50m Rechargement lent,1
        </td>
        <td>
            Venin du pendu
        </td>
        <td>
            Aucune
        </td>

    </tr>

    <!--3-->

    <tr>

        <td>
            <img src="../../assets/img/monster/mage.png" width="150px" height="200px">
        </td>

        <td>
            MAGES
        </td>
        <td>
            INT: 7<br>
            RÉF: 7<br>
            DEX: 6<br>
            COR: 5<br>
            VIT: 5<br>
            EMP: 4<br>
            TECH: 5<br>
            VOL: 8<br>
            CHA: 0<br>
            ÉTOU: 6<br>
            COU: 15<br>
            SAUT: 3<br>
            END: 30<br>
            ENC: 50<br>
            RÉC: 7<br>
            PS: 30<br>
            VIG: 10<br>
        </td>
        <td>
            Survie: 5
            Vigilance: 7
            Bâton/Lance: 6
            Esquive/Évasion: 8
            Athlétisme: 5
            Furtivité: 5
            Résilience: 5
            Courage: 6
            Envoûtement: 6
            Incantation: 7
            Résistance à la contrainte: 7
            Résistance à la magie: 7
            Rituels: 5
        </td>
        <td>
            0
        </td>
        <td>
            Bâton de fer,3d6,Focus (2),2
            Dague,1d6,Aucun,2
        </td>
        <td>
            Venin du pendu
            Dimeritium
        </td>
        <td>
            Un mage peut utiliser ces sorts: Aenye, Glamour, Poussière aveuglante, Rhewi, Téléportation
            Un mage peut lancer ces rituels: Jarre ensorcelée, Rituel de magie
            Un mage peut infliger ces envoûtements: Démangeaison éternelle, Envoûtement des Ombres
        </td>

    </tr>

    <!--4-->

    <tr>

        <td>
            <a href="../../fichiers/video/goule.webm" <i class="fas fa-play"></i>
            <img src="../../assets/img/monster/goule.png" width="150px" height="200px">
        </td>

        <td>
            GOULE
        </td>
        <td>
            INT: 1<br>
            RÉF: 6<br>
            DEX: 7<br>
            COR: 6<br>
            VIT: 6<br>
            EMP: 1<br>
            TECH: 1<br>
            VOL: 5<br>
            CHA: 0<br>
            ÉTOU: 5<br>
            COU: 18<br>
            SAUT: 3<br>
            END: 25<br>
            ENC: 60<br>
            RÉC: 5<br>
            PS: 25<br>
            VIG: 0<br>
        </td>
        <td>
            Survie: 6
            Vigilance: 7
            Bagarre: 6
            Esquive/Évasion: 6
            Mêlée: 6
            Athlétisme: 7
            Furtivité: 4
            Résilience: 6
            Courage: 7
            Résistance à la magie: 4
        </td>
        <td>
            0
        </td>
        <td>
            Griffes,3d6,Aucun,1
            Morsure,3d6+2,Saignement(25 %) –1 PRÉ,1
        </td>
        <td>
            Huile contre les nécrophages
        </td>
        <td>
            Bond
            Fureur
            Nyctalopie
            Sauvage
        </td>

    </tr>

    <!--5-->

    <tr>
        <td>
            <a href="../../fichiers/video/guenaude.webm" <i class="fas fa-play"></i>
            <img src="../../assets/img/monster/guenaude.png" width="150px" height="200px">
        </td>

        <td>
            GUENAUDE SÉPULCRALE
        </td>
        <td>
            INT: 6<br>
            RÉF: 10<br>
            DEX: 10<br>
            COR: 7<br>
            VIT: 7<br>
            EMP: 3<br>
            TECH: 3<br>
            VOL: 6<br>
            CHA: 0<br>
            ÉTOU: 6<br>
            COU: 21<br>
            SAUT: 4<br>
            END: 30<br>
            ENC: 70<br>
            RÉC: 6<br>
            PS: 60<br>
            VIG: 0<br>
        </td>
        <td>
            Survie: 6
            Vigilance: 8
            Bagarre: 6
            Esquive/Évasion: 8
            Mêlée: 8
            Athlétisme: 6
            Furtivité: 8
            Résilience: 7
            Courage: 9
            Résistance à la contrainte: 10
            Résistance à la magie: 10
        </td>
        <td>
            0
        </td>
        <td>
            Griffes,5d6,Saignement(50 %),2
            Morsure,6d6,Poison(75 %),1
            Langue,3d6+2,Poison(100 %) POR:4m,1
        </td>
        <td>
            Huile contre les nécrophages
            Langue fouet
        </td>
        <td>
            Cercle de crânes
            Commandement des morts-vivants
            Nyctalopie
        </td>

    </tr>

    <!--6-->

    <tr>
        <td>
            <a href="../../fichiers/video/noyeur.webm" <i class="fas fa-play"></i>
            <img src="../../assets/img/monster/noyeur.png" width="150px" height="200px">
        </td>

        <td>
            NOYEURS
        </td>
        <td>
            INT: 1<br>
            RÉF: 7<br>
            DEX: 7<br>
            COR: 6<br>
            VIT: 6<br>
            EMP: 1<br>
            TECH: 1<br>
            VOL: 4<br>
            CHA: 0<br>
            ÉTOU: 5<br>
            COU: 18<br>
            SAUT: 3<br>
            END: 25<br>
            ENC: 60<br>
            RÉC: 5<br>
            PS: 25<br>
            VIG: 0<br>
        </td>
        <td>
            Survie: 6
            Vigilance: 8
            Bagarre: 6
            Esquive/Évasion: 5
            Mêlée: 6
            Athlétisme: 6
            Furtivité: 5
            Résilience: 6
            Courage: 8
            Résistance à la magie: 4
        </td>
        <td>
            0
        </td>
        <td>
            Griffes,3d6,Aucun,1
        </td>
        <td>
            Huile contre les nécrophages
            Vulnérable au feu
        </td>
        <td>
            Sauvage
            Immunité au poison
            Amphibien
            Stupidité crasse
        </td>

    </tr>

    <!--7-->

    <tr>
        <td>
            <img src="../../assets/img/spectre.jpg" width="150px" height="200px">
        </td>

        <td>
            FANTÔMES
        </td>
        <td>
            INT: 4<br>
            RÉF: 6<br>
            DEX: 5<br>
            COR: 5<br>
            VIT: 5<br>
            EMP: 1<br>
            TECH: 1<br>
            VOL: 6<br>
            CHA: 0<br>
            ÉTOU: 5<br>
            COU: 15<br>
            SAUT: 3<br>
            END: 25<br>
            ENC: 50<br>
            RÉC: 5<br>
            PS: 25<br>
            VIG: 0<br>
        </td>
        <td>
            Survie: 6
            Vigilance: 8
            Bagarre: 6
            Escrime: 7
            Esquive/Évasion: 6
            Mêlée: 6
            Athlétisme: 5
            Furtivité: 9
            Résilience: 7 (Co)
            Incantation: 6
            Résistance à la magie: 6
        </td>
        <td>
            0
        </td>
        <td>
            Épée de spectre,3d6,Aucun,1
            Lanterne de spectre,2d6+2,Feu(25 %),1
        </td>
        <td>
            Huile contre les spectres
            Poussière de lune et Yrden
        </td>
        <td>
            Alimenté par la colère
            Décalage
            Téléportation
            Nyctalopie
        </td>

    </tr>

    <!--8-->

    <tr>
        <td>
            <a href="../../fichiers/video/spectre_midi.webm" <i class="fas fa-play"></i>
            <img src="../../assets/img/monster/spectre_de_midi.jpg" width="150px" height="200px">
        </td>

        <td>
            SPECTRE DE MIDI
        </td>
        <td>
            INT: 5<br>
            RÉF: 8<br>
            DEX: 6<br>
            COR: 7<br>
            VIT: 6<br>
            EMP: 1<br>
            TECH: 1<br>
            VOL: 9<br>
            CHA: 0<br>
            ÉTOU: 8<br>
            COU: 18<br>
            SAUT: 3<br>
            END: 40<br>
            ENC: 70<br>
            RÉC: 8<br>
            PS: 80<br>
            VIG: 0<br>
        </td>
        <td>
            Survie: 5
            Vigilance: 10
            Bagarre: 7
            Esquive/Évasion: 9
            Mêlée: 8
            Athlétisme: 4
            Furtivité: 10
            Résilience: 7
            Incantation: 8
            Résistance à la magie: 7
        </td>
        <td>
            0
        </td>
        <td>
            Griffes,5d6,Aucun,2
        </td>
        <td>
            Poussière de lune et Yrden
            Faiblesse astrale
        </td>
        <td>
            Alimenté par la colère
            Incorporel
            Danse de midi
            Démon de poussière
            Téléportation
        </td>

    </tr>

    <!--9-->

    <tr>
        <td>
            <img src="../../assets/img/monster/loup.jpg" width="150px" height="200px">
        </td>

        <td>
            LOUPS
        </td>
        <td>
            INT: 1<br>
            RÉF: 4<br>
            DEX: 6<br>
            COR: 5<br>
            VIT: 7<br>
            EMP: 1<br>
            TECH: 1<br>
            VOL: 4<br>
            CHA: 0<br>
            ÉTOU: 4<br>
            COU: 21<br>
            SAUT: 4<br>
            END: 20<br>
            ENC: 50<br>
            RÉC: 4<br>
            PS: 20<br>
            VIG: 0<br>
        </td>
        <td>
            Survie: 9
            Vigilance: 6
            Bagarre: 6
            Esquive/Évasion: 6
            Mêlée: 6
            Athlétisme: 6
            Furtivité: 6
            Résilience: 5
            Courage: 6
            Résistance à la magie: 2
        </td>
        <td>
            0
        </td>
        <td>
            Morsure,2d6,Aucun,1
        </td>
        <td>
            Huile contre les bêtes
        </td>
        <td>
            Traque olfactive
            Nyctalopie
        </td>

    </tr>

    <!--10-->

    <tr>
        <td>
            <a href="../../fichiers/video/warg.webm" <i class="fas fa-play"></i>
            <img src="../../assets/img/monster/loup.jpg" width="150px" height="200px">
        </td>

        <td>
            WARGS
        </td>
        <td>
            INT: 2<br>
            RÉF: 5<br>
            DEX: 7<br>
            COR: 6<br>
            VIT: 8<br>
            EMP: 1<br>
            TECH: 1<br>
            VOL: 6<br>
            CHA: 0<br>
            ÉTOU: 6<br>
            COU: 24<br>
            SAUT: 4<br>
            END: 30<br>
            ENC: 60<br>
            RÉC: 6<br>
            PS: 30<br>
            VIG: 0<br>
        </td>
        <td>
            Survie: 9
            Vigilance: 6
            Bagarre: 6
            Esquive/Évasion: 6
            Mêlée: 6
            Athlétisme: 6
            Furtivité: 6
            Résilience: 5
            Courage: 6
            Résistance à la magie: 2
        </td>
        <td>
            0
        </td>
        <td>
            Morsure,2d6,Aucun,1
        </td>
        <td>
            Huile contre les bêtes
        </td>
        <td>
            Traque olfactive
            Nyctalopie
            Chef de meute
        </td>

    </tr>

    <!--11-->

    <tr>
        <td>
            <a href="../../fichiers/video/loupgarou.webm" <i class="fas fa-play"></i>
            <img src="../../assets/img/monster/loup_garou.jpg" width="150px" height="200px">
        </td>

        <td>
            LOUPS-GAROUS
        </td>
        <td>
            INT: 6<br>
            RÉF: 8<br>
            DEX: 8<br>
            COR: 7<br>
            VIT: 9<br>
            EMP: 1<br>
            TECH: 3<br>
            VOL: 5<br>
            CHA: 0<br>
            ÉTOU: 6<br>
            COU: 27<br>
            SAUT: 5<br>
            END: 30<br>
            ENC: 70<br>
            RÉC: 6<br>
            PS: 60<br>
            VIG: 0<br>
        </td>
        <td>
            Survie: 9
            Vigilance: 10
            Bagarre: 8
            Esquive/Évasion: 8
            Mêlée: 9
            Athlétisme: 8
            Furtivité: 9
            Résilience: 8
            Courage: 10
            Résistance à la contrainte: 10
            Résistance à la magie: 9
        </td>
        <td>
            8
        </td>
        <td>
            Griffes,4d6+2,Saignement(25 %),2
            Morsure,5d6,Saignement(75 %),1
        </td>
        <td>
            Huile contre les créatures maudites
            Poussière de lune
        </td>
        <td>
            Régénération
            Traque olfactive
            Nyctalopie
        </td>

    </tr>

    <!--12-->

    <tr>
        <td>
            <a href="../../fichiers/video/griffon.webm" <i class="fas fa-play"></i>
            <img src="../../assets/img/monster/griffon.jpg" width="150px" height="200px">
        </td>

        <td>
            GRIFFONS
        </td>
        <td>
            INT: 1<br>
            RÉF: 10<br>
            DEX: 10<br>
            COR: 15<br>
            VIT: 6<br>
            EMP: 1<br>
            TECH: 1<br>
            VOL: 5<br>
            CHA: 0<br>
            ÉTOU: 10<br>
            COU: 18<br>
            SAUT: 3<br>
            END: 50<br>
            ENC: 150<br>
            RÉC: 10<br>
            PS: 100<br>
            VIG: 0<br>
        </td>
        <td>
            Survie: 8
            Vigilance: 10
            Bagarre: 7
            Esquive/Évasion: 7
            Mêlée: 9
            Athlétisme: 7
            Furtivité: 4
            Résilience: 3
            Courage: 10
            Résistance à la magie: 9
        </td>
        <td>
            8
        </td>
        <td>
            Griffes,6d6,Aucun,2
            Morsure,7d6+2,Saignement(50 %),1
        </td>
        <td>
            Huile contre les hybrides
        </td>
        <td>
            Hurlement sonique
            Charge
            Sauvage
            Vol
            Nyctalopie
        </td>

    </tr>

    <!--13-->

    <tr>
        <td>
            <a href="../../fichiers/video/sirene2.webm" <i class="fas fa-play"></i>
            <img src="../../assets/img/sirene.jpeg" width="150px" height="200px">
        </td>

        <td>
            SIRÈNES
        </td>
        <td>
            INT: 3<br>
            RÉF: 7<br>
            DEX: 7<br>
            COR: 6<br>
            VIT: 8<br>
            EMP: 3<br>
            TECH: 3<br>
            VOL: 8<br>
            CHA: 0<br>
            ÉTOU: 7<br>
            COU: 24<br>
            SAUT: 4<br>
            END: 35<br>
            ENC: 60<br>
            RÉC: 7<br>
            PS: 35<br>
            VIG: 0<br>
        </td>
        <td>
            Survie: 7
            Vigilance: 7
            Bagarre: 7
            Esquive/Évasion: 6
            Mêlée: 7
            Athlétisme: 8
            Furtivité: 8
            Résilience: 6
            Courage: 5
            Résistance à la contrainte: 6
            Résistance à la magie: 6
        </td>
        <td>
            0
        </td>
        <td>
            Griffes,2d6+2,+1 PRÉ,1
            Queue,3d6+2,Aucun,1
        </td>
        <td>
            Huile contre les hybrides
            Mouvement entravé
        </td>
        <td>
            Illusion
            Hurlement sonique
            Amphibien
            Vol
        </td>

    </tr>

    <!--14-->

    <tr>
        <td>
            <a href="../../fichiers/video/arachas_cuirasse.webm" <i class="fas fa-play"></i>
            <img src="../../assets/img/monster/arachas.jpg" width="150px" height="200px">
        </td>

        <td>
            ARACHAS
        </td>
        <td>
            INT: 1<br>
            RÉF: 9<br>
            DEX: 6<br>
            COR: 13<br>
            VIT: 5<br>
            EMP: 1<br>
            TECH: 1<br>
            VOL: 5<br>
            CHA: 0<br>
            ÉTOU: 9<br>
            COU: 15<br>
            SAUT: 3<br>
            END: 45<br>
            ENC: 130<br>
            RÉC: 9<br>
            PS: 90<br>
            VIG: 0<br>
        </td>
        <td>
            Survie: 4
            Vigilance: 6
            Bagarre: 5
            Esquive/Évasion: 8
            Mêlée: 5
            Athlétisme: 5
            Furtivité: 6
            Résilience: 5
            Courage: 10
            Résistance à la magie: 9
        </td>
        <td>
            20
        </td>
        <td>
            Griffes,5d6,Poison(25 %),2
        </td>
        <td>
            Huile contre les insectoïdes
            Point faible
        </td>
        <td>
            Bond
            Résistances (saignement,T,P)
            Immunité au poison
            Camouflage
            Toile
            Sauvage
        </td>

    </tr>

    <!--15-->

    <tr>
        <td>
            <img src="../../assets/img/reine_endriagues.png" width="150px" height="200px">
        </td>

        <td>
            REINE ENDRIAGUES
        </td>
        <td>
            INT: 1<br>
            RÉF: 9<br>
            DEX: 6<br>
            COR: 13<br>
            VIT: 5<br>
            EMP: 1<br>
            TECH: 1<br>
            VOL: 5<br>
            CHA: 0<br>
            ÉTOU: 9<br>
            COU: 15<br>
            SAUT: 3<br>
            END: 45<br>
            ENC: 130<br>
            RÉC: 9<br>
            PS: 90<br>
            VIG: 0<br>
        </td>
        <td>
            Survie: 6
            Vigilance: 5
            Bagarre: 5
            Esquive/Évasion: 6
            Mêlée: 6
            Athlétisme: 5
            Furtivité: 7
            Résilience: 6
            Courage: 5
            Résistance à la magie: 6
        </td>
        <td>
            10
        </td>
        <td>
            Griffes,3d6,Aucun,1
        </td>
        <td>
            Huile contre les insectoïdes
        </td>
        <td>
            Bond
            Résistances (saignement,T)
            Immunité au poison
            Sauvage
        </td>

    </tr>

    <!--16-->

    <tr>
        <td>
            <img src="../../assets/img/monster/golem.jpg" width="150px" height="200px">
        </td>

        <td>
            GOLEMS
        </td>
        <td>
            INT: 1<br>
            RÉF: 10<br>
            DEX: 6<br>
            COR: 13<br>
            VIT: 4<br>
            EMP: 1<br>
            TECH: 1<br>
            VOL: 4<br>
            CHA: 0<br>
            ÉTOU: 8<br>
            COU: 12<br>
            SAUT: 2<br>
            END: -<br>
            ENC: 130<br>
            RÉC: 8<br>
            PS: 80<br>
            VIG: 0<br>
        </td>
        <td>
            Survie: 4
            Vigilance: 8
            Bagarre: 5
            Esquive/Évasion: 4
            Athlétisme: 2
            Furtivité: 2
            Physique: 10
            Résistance à la magie: 10
        </td>
        <td>
            20
        </td>
        <td>
            Poings,8d6,Ablation,1
        </td>
        <td>
            Huile contre les élémentaires
            Vulnérable à l’électricité
            Bombes au dimeritium
        </td>
        <td>
            Force écrasante
            Charge
            Construit
            Résistances (T,P)
        </td>


        <!--17-->

    <tr>
        <td>
            <a href="../../fichiers/video/fiellon.webm" <i class="fas fa-play"></i>
            <img src="../../assets/img/monster/fiellon.png" width="150px" height="200px">
        </td>

        <td>
            FIELLONS
        </td>
        <td>
            INT: 1<br>
            RÉF: 13<br>
            DEX: 10<br>
            COR: 15<br>
            VIT: 7<br>
            EMP: 1<br>
            TECH: 1<br>
            VOL: 9<br>
            CHA: 0<br>
            ÉTOU: 10<br>
            COU: 21<br>
            SAUT: 4<br>
            END: 55<br>
            ENC: 150<br>
            RÉC: 11<br>
            PS: 110<br>
            VIG: 0<br>
        </td>
        <td>
            Survie: 6
            Vigilance: 10
            Bagarre: 8
            Esquive/Évasion: 7
            Mêlée: 9
            Athlétisme: 5
            Furtivité: 1
            Physique: 10
            Résilience: 7
            Courage: 10
            Incantation: 7
            Résistance à la magie: 10
        </td>
        <td>
            10
        </td>
        <td>
            Griffes,6d6+2,Aucun,2
            Morsure,7d6,Saignement (50 %),1
            Cornes,8d6,–1 PRÉ,1
        </td>
        <td>
            Huile contre les reliques
            Poussière de lune
            Ouïe sensible
        </td>
        <td>
            Régénération
            Charge
            Massif
            Hypnose
            Sauvage
        </td>

    </tr>

    <!--18-->

    <tr>
        <td>
            <a href="../../fichiers/video/nekker.webm" <i class="fas fa-play"></i>
            <img src="../../assets/img/monster/necker.png" width="150px" height="200px">
        </td>

        <td>
            NEKKERS
        </td>
        <td>
            INT: 2<br>
            RÉF: 5<br>
            DEX: 7<br>
            COR: 3<br>
            VIT: 6<br>
            EMP: 2<br>
            TECH: 2<br>
            VOL: 4<br>
            CHA: 0<br>
            ÉTOU: 3<br>
            COU: 18<br>
            SAUT: 3<br>
            END: 15<br>
            ENC: 30<br>
            RÉC: 3<br>
            PS: 15<br>
            VIG: 0<br>
        </td>
        <td>
            Survie: 8
            Vigilance: 8
            Bagarre: 5
            Esquive/Évasion: 6
            Mêlée: 5
            Athlétisme: 7
            Furtivité: 8
            Résilience: 6
            Courage: 6
            Résistance à la contrainte: 9
            Résistance à la magie: 4
        </td>
        <td>
            0
        </td>
        <td>
            Griffes,2d6,Aucun,1
        </td>
        <td>
            Huile contre les ogroïdes
        </td>
        <td>
            Nyctalopie
        </td>
    </tr>

    <!--19-->

    <tr>
        <td>
            <a href="../../fichiers/video/troll_pierre.webm" <i class="fas fa-play"></i>
            <img src="../../assets/img/monster/troll.jpg" width="150px" height="200px">
        </td>

        <td>
            TROLLS DE PIERRE
        </td>
        <td>
            INT: 3<br>
            RÉF: 8<br>
            DEX: 7<br>
            COR: 12<br>
            VIT: 4<br>
            EMP: 6<br>
            TECH: 7<br>
            VOL: 4<br>
            CHA: 0<br>
            ÉTOU: 8<br>
            COU: 12<br>
            SAUT: 2<br>
            END: 40<br>
            ENC: 120<br>
            RÉC: 8<br>
            PS: 80<br>
            VIG: 0<br>
        </td>
        <td>
            Survie: 7
            Vigilance: 9
            Bagarre: 8
            Esquive/Évasion: 5
            Athlétisme: 3
            Furtivité: 3
            Résilience: 8
            Courage: 10
            Résistance à la contrainte: 6
            Résistance à la magie: 8
        </td>
        <td>
            20
        </td>
        <td>
            Poings,6d6,Aucun,2
        </td>
        <td>
            Huile contre les ogroïdes
            Point faible
        </td>
        <td>
            Force écrasante
            Lanceur de roche
            Résistances (T,C,P)
        </td>

    </tr>

    <!--20-->

    <tr>
        <td>
            <a href="../../fichiers/video/wyvern.webm" <i class="fas fa-play"></i>
            <img src="../../assets/img/wyvern.PNG" width="150px" height="200px">
        </td>

        <td>
            WYVERNS
        </td>
        <td>
            INT: 1<br>
            RÉF: 10<br>
            DEX: 10<br>
            COR: 10<br>
            VIT: 7<br>
            EMP: 1<br>
            TECH: 1<br>
            VOL: 6<br>
            CHA: 0<br>
            ÉTOU: 8<br>
            COU: 21<br>
            SAUT: 4<br>
            END: 40<br>
            ENC: 100<br>
            RÉC: 8<br>
            PS: 80<br>
            VIG: 0<br>
        </td>
        <td>
            Survie: 9
            Vigilance: 10
            Bagarre: 7
            Esquive/Évasion: 6
            Mêlée: 8
            Athlétisme: 8
            Furtivité: 6
            Résilience: 8
            Courage: 8
            Résistance à la magie: 8
        </td>
        <td>
            10
        </td>
        <td>
            Griffes,6d6,Aucun,2
            Morsure,7d6,Poison(25 %),1
            Queue,5d6+2,Poison(75 %),1
        </td>
        <td>
            Huile contre les draconides
        </td>
        <td>
            Vol
            Projection de venin
            Résistances (T,P)
            Sauvage
        </td>

    </tr>

    </tbody>

</table>

</body>
</html>

