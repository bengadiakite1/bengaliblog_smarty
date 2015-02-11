<?php
include('include/haut.inc.php');// le haut
include('include/verif_connexion.inc.php');
if($connecte) {

if (isset($_POST['Ajouter'])){

$entete=htmlspecialchars($_POST['entete']);
$corps=htmlspecialchars($_POST['corps']);
$date=date("Y-m-d H:i:s");
// inseré les données dans la base de donnees 

$reqt="INSERT INTO article(entete,corps,date) VALUES ('$entete', '$corps','$date')";//
$data=mysqli_query($cont, $reqt);
$_SESSION['article']='ajoute';// ajouter


if (!empty($_POST['image'])) { // si ya probleme d'image afficher erreur
$erreur_img = $_FILES['image']['error'];
} else {
$erreur_img = "Erreur d'image";
}


$insert_id = mysqli_insert_id($cont);
//recuperation du nom du chemin de l'image et on le deplace ver la racine du serveur dans img avec le numero de l'id
move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__) . "/img/".$insert_id.".jpg");
 
 
header('location:index.php');//redirection


}
?>


<form action="article.php" method="POST" enctype="multipart/form-data">

<div class="clearfix">
<label for="titre">Titre</label>
<div class="input"><input type="text" name="entete" id="entete"></div>
</div>

<div class="clearfix">
<label for="texte">Texte</label>
<div class="input"><textarea name="corps" id="corps" ></textarea></div>
</div>
<div class="input">
<img src="img/.jpg" width ='100'><!-- Définie l'image -->
<input type="file" name="image" id="image">
</div>
<div class="form-action">

<input type="submit" value="Ajouter" name="Ajouter" class="btn btn-large btn-primary">	
</div>
</form>

<?php
include('include/bas.inc.php');//le bas
}
else { header('location:connexion.php');
}
?>









