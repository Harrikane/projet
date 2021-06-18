<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs</title>
</head>
<body>
<?php  require_once 'templates/header.php';
if(isset($_SESSION['isadmin'])){ ?>
    <p> Ajouter des chats  <a href="modo.php"><input type="button" value="X"></a> </p>
    
    
    <?php } ?>
    <main>
        <?php
            if(isset($_SESSION['content'])){
                echo $_SESSION['content'];
            }
        ?>
    </main>
</body>
</html>
 <!-- if ($_SESSION('pseudo') == 'modo' ){
            require 'modo.php'
        }
           -->