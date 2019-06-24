<?php
if(isset($_POST['ajout-competences_info'])) {
    if(!empty($_POST['nom']) AND !empty($_POST['niveau'])  {

        $nom = htmlspecialchars($_POST['nom']);
        $niveau = htmlspecialchars($_POST['niveau']);
        $insert_competences_info = $bdd->prepare('INSERT INTO competences_info (nom, niveau) VALUES (:nom, :niveau, )');
            $insert_competences_info->execute([
                                   'nom' => $nom,
                                   'niveau' => $niveau,
                                   ]);

            $erreurok = "la compétence  a bien été ajouté à votre portfolio.";

    } else {
        $erreur = "Merci de remplir tous les champs.";
    }
}
