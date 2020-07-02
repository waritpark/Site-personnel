<?php
    $connexion = new PDO('mysql:host=localhost;dbname=bdd_arthur', 'root', 't4q8h\s6A^8Gk)$ykyHT%d[S&TGCh%.GL\&ojp[P');
	$update="DELETE FROM t_portfolio WHERE id=".$_GET['id_portfolio2']." ";
	$stmt = $connexion->prepare($update);
	$stmt->execute();
	header("Location:portfolio.php");
?>
	