<?php 
include('include/haut.inc.php');
require_once('include/cont.inc.php');
include('include/verif_connexion.inc.php');
require_once ('include/notification.inc.php');
?>	

<?php 
if(isset($_POST['email']) && isset($_POST['mdp']))
  {
$temp=3600;
$email=htmlspecialchars($_POST['email']);
$mdp=htmlspecialchars($_POST['mdp']);
$reqt= "SELECT * FROM utilisateur WHERE email='$email' AND mdp='$mdp'";
$data=mysqli_query($cont,$reqt);
$resul=mysqli_fetch_array($data);
if($resul)
		{
$expiration = time() +3600;
$sid=md5($email.time());//Chiffre l'email
$reqt="UPDATE utilisateur SET sid='$sid', expiration='$expiration' WHERE id={$resul['id']}";
$data=mysqli_query($cont,$reqt);
$_SESSION['article']='connexion';
setcookie('sid',$sid, $expiration); //création d'un cookie
 header('location:index.php');
		}		
else
		{
	    
header('location:connexion.php');
		}		
}
	
?>


<h2>Connexion</h2>
<p><b>Saisissez vos identifiants</b></p>

<form action="connexion.php" method="POST" id="form_connexion">
<fieldset>
<div class="clearfix">
<label for="email">Email</label>
<div class="input"><input id="email" name="email" size="30" type="email" value="" /></div>
</div>
<div class="clearfix">
<label for="mdp">Mot de passe</label>
<div classe="input"><input id="mdp" name="mdp" size="15" type="password" /></div>
</div>
<div class="form-action">
<input class="btn btn-large btn primary" type="submit" value="Se connecter" />
</div>
</fieldset>
</form>
			
<?php

include('include/bas.inc.php');

?>