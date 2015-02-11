{foreach from=$montableau item=article}


<img src="img/{$article.id}.jpg" alt="article sans image" style="width:350px;height:270px">


<br>
<br>

{$article.entete}<br>
{$article.corps}

<a href='#' class='afficher_article' data-id={$article.id} >Lire</a>
<br>
 {$article.date}
  <br>
  
  


	{if isset($connecte) and $connecte == 1 }
<p><a class= "btn btn-large btn-primary"  href="modification.php?id={$article.id}">Modifier</a>
	<a class= "btn btn-large btn-danger"  href="supprimer.php?id={$article.id}">Supprimer</a> </p>
	
	
	 
 
{* fin verification si on est connecter *}
{/if}
{/foreach }
<ul class="pagination">
{if isset ($smarty.get.p) and $smarty.get.p > 1}
<li><a href="index.php?p={$smarty.get.p-1}">&laquo;</a></li>
{/if}
{for $i=1 to $nb_pages}
<li ><a href="index.php?p={$i}">{$i}</a></li>
{/for}
{if isset ($smarty.get.p) and $smarty.get.p < $nb_pages}

<li><a href="index.php?p={$smarty.get.p+1}">&raquo;</a></li>
 
{/if}
<ul>

