<?php
    if(isset($_POST['modif-competences_info'])) {
            $nom = $_POST['nom'];
            $niveau = $_POST['niveau'];
            $id_competences_info = $_POST['$id_competences_info'];
            $update_settings = $bdd->prepare('UPDATE competences_info SET nom = :nom, niveau = :niveau  WHERE id = :id');
            $update_settings->execute([
                                      'nom' => $nom,
                                      'niveau' => $niveau,
                                      '$id_competences_info' => $id_competences_info
                                      ]);
        $erreurok = "competence modifié avec succès";
        } else {
            $erreur = "Une erreur est survenue.";
        }
?>
