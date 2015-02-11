<?php
require_once('include/cont.inc.php');
include('include/verif_connexion.inc.php');
require_once('include/notification.inc.php');
if (isset($_POST['Ajouter'])){

$entete=htmlspecialchars($_POST['entete']);
$corps=htmlspecialchars($_POST['corps']);
$date=time();
// inseré les données dans la base de donnees 

$reqt="INSERT INTO article(entete,corps,date) VALUES ('$entete', '$corps','$date')";//
$data=mysqli_query($cont, $reqt);
$_SESSION['article']='ajoute';// ajouter


/*if (!empty($_POST['image'])) { // si ya probleme d'image afficher erreur
$erreur_img = $_FILES['image']['error'];
} else {
$erreur_img = "Erreur d'image";
}


$insert_id = mysql_insert_id();
//recuperation du nom du chemin de l'image et on le deplace ver la racine du serveur dans img avec le numero de l'id
move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__) . "/img/'".$insert_id."'.jpg");*/
 print_r($_FILES);

}
?>

<?php



?>