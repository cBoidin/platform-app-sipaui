<!DOCTYPE html>
<html lang="fr">
	<?php
    include("assets/fragments/head-of.php");
    ?>
	<body>
    	<?php
        include("assets/fragments/header.php");
        ?>

    	<nav>
        	<?php
            $actif='poc';
            include("../assets/fragments/nav.php");
            ?>
        	<ul class="su-horizontal sous-menu">
        		<li><a href="basiques-neutre.php">Objets basiques sans thème</a></li>
        		<li><a href="basiques-of.php" class="actif">Objets basiques thème Ouest-France</a></li>
        	</ul>
        </nav>

        <main>
        	<h2>Objets basiques Ouest-France</h2>
        	<h3>Standards</h3>

        </main>
	</body>
</html>