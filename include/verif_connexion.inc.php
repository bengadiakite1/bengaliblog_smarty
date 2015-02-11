<?php
require_once('include/cont.inc.php');

if(isset($_COOKIE['sid']))
{
$sid=$_COOKIE['sid'];
$expiration= time() + 1800;
$reqt="SELECT * FROM utilisateur WHERE sid=$sid AND $expiration";
$data=mysqli_query($cont,$reqt);
$connecte=true;	
}
else
{
$connecte=false;
}
?>