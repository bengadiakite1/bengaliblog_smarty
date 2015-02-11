<?php
require_once('include/cont.inc.php');
require_once('include/haut.inc.php');
include('include/verif_connexion.inc.php');
$id=$_GET['id'];//Variable qui contient indentifiant de l'article que l'on vas  modifier

$reqt="SELECT *FROM article WHERE id=".$id;   //  selectionner  l'article dans la base
$data=mysqli_query($cont,$reqt);

if($resul=mysqli_fetch_array($data))
{
?>
<form action="modification1.php" method="POST">

<input type="hidden" name="id" value="<?php echo ($id);?>">	
<div class="clearfix">
<label for="titre">Titre</label>
<div class="input"><input type="text" name="entete" value="<?php echo $resul['entete'];?>"></div>
</div>
		
<div class="clearfix">
<label for="texte">Texte</label>
<div class="input">
<textarea name="corps"><?php echo $resul['corps'];?></textarea>
</div>
</div>
<div class="input">
<img src="img/.jpg" width ='100'><!-- Définie l'image -->
<input type="file" name="image" id="image">
</div>
<div class="form-action">
<input type="submit" value="Ajouter" class="btn btn-large btn-primary">	
</div>
</form>

<?php
}
?>


<?php

require_once('include/bas.inc.php');

?>
