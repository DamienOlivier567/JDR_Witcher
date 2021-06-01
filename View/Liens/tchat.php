<?php
session_start();

//Check if the user exists if he does not exist he is redirected to the connect.php page
// Vérifier si l'utilisateur existe s'il n'existe pas il esarticlet redirigé vers la page connect.php
if (!isset($_SESSION['user'])){
    header('Location: ./connexion.php');
}

$pseudo = $_SESSION['user']['pseudo'];
$id = $_SESSION['user']['id'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kaer Mohren</title>
    <link rel="stylesheet" href="../../assets/css/style_global.css">
    <link rel="stylesheet" href="../../assets/css/style_accueil.css">
    <script src="https://kit.fontawesome.com/9e5ac608ee.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="contains">
    <div id="top">
        <div id="title">
            <h1 id="kaer">Kaer Mohren</h1>
        </div>
    </div>
    <div id="tchat">
        <!-- Post location in div below -->
        <!-- Emplacement du message en div ci-dessous -->
        <div id="message">

        </div>

        <!-- Form to send messages -->
        <div id="writeTchat">
            <form action="message.php?task=write" method="POST">
                <input type="text" name="user_fk" id="user_fk" value="<?= $id ?>" hidden>
                <input type="text" id="messageTxt" name="message" minlength="3" placeholder="Écri ton message ici mon ami !" required>
                <button type="submit"><i class="fas fa-scroll"></i></button>
            </form>
        </div>
    </div>
</div>

<script src="../../assets/js/tchat.js"></script>

</body>
</html>
