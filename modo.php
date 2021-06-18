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
<?php  require_once 'templates/header.php'; ?>
    <main>
        <h1>LES CHOIX</h1>
         <p> Voici un chat mangeur de tacos triple XL</p>
        <img src="https://www.e-conception.fr/wp-content/uploads/2021/03/tristan.jpg">
        <p> Et hope un chat sauvage</p>
        <img src="https://lh3.googleusercontent.com/proxy/X1A6PT4GCo5E15itAtSU42VUWx4Ww3Kj8EjCID7AwrlDvh3KGhI0oJD9ElhIrxmawS6F-lBzopCZ0WF1ff8qYqYaaRja3Jn_B3bFVeUqZ1miEt8SoN4jgbuQgTk4SE5xANPqOaq0MIWwEkuzbiPObjVMq1byBB9D8RfG3Kka354erc5d0q9-oR2EXOKqDFSLWDnZlJDAoAvfz2tQvoL-ia7PqquhBzmAekiP9fb5njXME9DZMg">
        <p> Le famosous chat du bengal</p>
        <img src="https://collier-gpschien.com/wp-content/uploads/2020/04/0f7c27f1c593f22134f30bb11ad50144-min.jpg">
        <?php  
            $_SESSION['content'] = '<p> Voici un chat mangeur de tacos triple XL</p>  <img src="https://www.e-conception.fr/wp-content/uploads/2021/03/tristan.jpg">'
        ?>
    </main>
    
</body>
</html>