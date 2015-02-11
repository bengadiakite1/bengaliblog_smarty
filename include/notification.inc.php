<?php 
require_once('include/cont.inc.php');

if(isset($_SESSION['article'])){

$croix='<a href="#" class="cacher_notif" data-dismiss="alert">&times;</a>';


	switch($_SESSION['article']){

		case 'ajoute' :
	    echo "<div class='alert alert-success'>$croix  Ajouter </div>";
		break;
	
		case 'modifie' :
		echo "<div class='alert alert-success'> $croix Modifier </div>";
		break;
		 
		case 'supprime' :
		echo "<div class='alert alert-success'>$croix  Supprimer </div>";
	    break;
		
		case 'erreur' :
		//echo '<a href="#" class="cacher_notif">&times;</a>';
		$tr="alert-error";
		$msg='erreur';
		break;
	
		case'connexion':
		echo "<div class='alert alert-success'>connecter</div>";
		break;
		
		case'deconnexion':
		echo "<div class='alert alert-success'>$croix  Deconnecter</div>";
		break;
		
		case'login':
		echo "<div class='alert alert-success'>$croix Inscription reussit</div>";
		break;
		
	
	}
	unset($_SESSION['article']);
}

?>
	
  
 <script>
	$(".cacher_notif").click(function(){
  $(".alert").fadeOut();
}); 

 
	

	
</script>	
  

