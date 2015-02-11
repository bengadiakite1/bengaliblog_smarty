

</div>
<nav class="span4">
<h2>Menu</h2>
<form action="index.php?" method="GET" class="form-inline"> 
<div class="form-group">
<br>
<input type="texte" name="r" placeholder="recherche" class="span 3">
<input type="submit" value="OK" class="btn">
</div>
</form>
<ul>
<?php if($connecte) {?>
<li><a href="index.php">Accueil</a></li>
<li><a href="deconnexion.php">Deconnexion</a></li>

<li><a href="article.php">Rédiger un article</a></li>
<li><a href="#">Statut connexion : <?php echo "<span style='color: green;'>En ligne</span>";?> </a></li>
<?php } ?>
<?php if(!$connecte) {?>
<li><a href="connexion.php">Connexion</a></li>



<li><a href="inscription.php"> l'inscription</a></li>
<li><a href="#">Statut connexion : <?php echo "<span style='color: red;'>Hors ligne</span>";?> </a></li>
<?php } ?>           
</ul>
</nav>
</div>
</div>
<footer>
<p>&copy; Nilsine & ULCO 2012</p>
</footer>
