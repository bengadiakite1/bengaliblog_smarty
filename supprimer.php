<?php
require_once('include/notification.inc.php');
require_once('include/cont.inc.php');
require_once('include/notification.inc.php');

$id=$_GET['id'];

$reqt="DELETE FROM article WHERE id=$id"; //pour supprimer un article
$data=mysqli_query($cont,$reqt);
$_SESSION['article']='supprime'; // supprimer

header('location: index.php');// redirection vers index.php

?>