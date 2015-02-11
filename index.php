<?php 
include('include/haut.inc.php');//haut
require_once('/usr/share/php/smarty3/Smarty.class.php');


include('include/verif_connexion.inc.php');

include('include/notification.inc.php');
require_once('include/cont.inc.php');//connexion
	
	

$smarty = new smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';

if (isset($_SESSION['notif_inscription'])){
echo $_SESSION['notif_inscription'];
session_destroy();
}
echo '<br>';
//echo"Hello world !<br>";
	
if(isset($_GET['p'])){  //Pagination
$page=$_GET['p'];
}else{
$page=1;
}
$app=3;
$debut=($page-1)*$app;
$reqt="SELECT * FROM article ORDER BY id LIMIT $debut, $app";
if(isset($_GET['r'])){
$r=htmlspecialchars($_GET['r']) ;
$reqt.=" WHERE entete LIKE '%$r%' OR corps LIKE '%$r%'"; //concatenation 
$entete="r:" .$r;
} else{
$titre="Dernier article";
} 
$reqt= "SELECT * FROM article ORDER BY date DESC LIMIT $debut, $app ";

$data=mysqli_query($cont, $reqt);

while($resul=mysqli_fetch_array($data))         //Boucle pour l'affichage les données de la base
	{
	$montab[] =$resul;
	
	



}
if($connecte){
 	$smarty->assign("connecte",$connecte);
}
	
	
 
//pour effectuer  effectuer la pagination
$reqt="SELECT COUNT(*) AS nb FROM article";
$data=mysqli_query($cont, $reqt);
$resul=mysqli_fetch_array($data);

$total=$resul['nb'];
$nb_pages=ceil($total/$app);

 
       	

$smarty->assign("nb_pages",$nb_pages);
$smarty->assign("page",$page);
$smarty->assign("montableau", $montab);
//$smarty->assign("montable2", $montable3);
$smarty->display('index.tpl');
include ('include/bas.inc.php');// le footer
?>

<script>
$(function(){
	
$(".afficher_article").click(function(){
recupid= $(this).attr('data-id');
$.get("afficher_article.php?id="+recupid,function(data){
$(".span8").html(data)
	
});
})
});
	</script>	