
<header>
    
    <nav id="navbar">
        <ul>
            <li><a href="../index.php">Accueil</a></li>
            <?php if (isset($_SESSION['pseudo'])) :?>
                <p class="bjr"> Bonjour <?= ucwords($_SESSION['pseudo'])?></p>
                <li><a href="controller/deco.php">Deconnexion</a></li>              
             <?php else : ?>
                <li><a href="connection.php">Connexion</a></li>
            <?php endif ?> 
        </ul>
    </nav>
</header>
