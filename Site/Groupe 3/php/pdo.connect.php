<?php
// CONNEXION BDD PDO
try{
    $host = "localhost"; // Hôte de ta base de données.
    $nom_bdd = "uf_web"; //Nom de ta base de données.
    $user_bdd = "root"; // Nom d'utilisateur de ta base de données.
    $mdp_bdd = ""; // Le mot de passe de ta base de données.
    $bdd = new PDO('mysql:host='.$host.';dbname='.$nom_bdd.';charset=utf8', ''.$user_bdd.'', ''.$mdp_bdd.'', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}
?>
