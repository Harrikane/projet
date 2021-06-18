<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Connexion</title>
</head>
<body>
    <?php require 'templates/header.php' ?>
    <main>
        <h1>Se connecter</h1>
        <form action="controller/login.php" method="POST">
            <div class="form-group">
                <label for="name">Login </label>
                <input type="text" id="name" class="form-control" placeholder="Pseudo" name="kakaroto" >
            </div>
            <div>
                <label for="pwd">Mot de passe </label>
                <input type="password" id="pass" placeholder="ex : 01245aze" name="pwdKakaroto">
            </div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
    </main>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>