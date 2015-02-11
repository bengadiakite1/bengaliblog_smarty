<?php

require_once('include/cont.inc.php');
include('include/haut.inc.php');

if (isset($_POST['envoyer'])){


$email=$_POST['email'];
 
$password=$_POST['password'];

$reqt="insert into utilisateur (email,mdp) value('".$email."','".$password."')";
mysqli_query($cont,$reqt);


$_SESSION['notif_inscription']="incription reussie";


Header('Location: index.php');




}
?>


<form action="inscription.php" method="post">
EMAIL<br><input type="email" name="email" ><br>
MOT DE PASSE<br><input type="password" name="password" ><br>
<input type="submit" name="envoyer" value="envoyer">
</form>







<?php

//require_once('include/bas.inc.php');//le bas

?>