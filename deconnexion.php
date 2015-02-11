<?php
include('include/verif_connexion.inc.php');
require_once ('include/notification.inc.php');
require_once('include/cont.inc.php');


setcookie('sid', '', time()-1);
$_SESSION['article']='deconnexion';


header('location:index.php');


?>
