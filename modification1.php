<?php
require_once('include/notification.inc.php');
require_once('include/cont.inc.php');
$entete=htmlspecialchars($_POST['entete']);//Recuperé entete
$corps=htmlspecialchars($_POST['corps']);   //  recupere le  corps
$id=$_POST['id'];        //identifiant de l'article a modifier
	 
	 
$reqt="UPDATE article SET entete='$entete', corps='$corps' WHERE id='$id'"; //pour faire la modification
$data=mysqli_query($cont,$reqt);

$_SESSION['article']='modifie';


header('location:index.php');// rediriger vers index.php


?>