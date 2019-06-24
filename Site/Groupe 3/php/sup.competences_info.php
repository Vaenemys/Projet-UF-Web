<?php
    if(isset($_POST['suppr-competences_info'])) {
        $id_competences_info = $_POST['$id_competences_info'];

        $suppr = $bdd->prepare('DELETE FROM competences_info WHERE id = :id');
        $suppr->execute([
                                  '$id_competences_info' => $id_competences_info
                                  ]);
        $erreurok = "competence supprimé avec succès";
    } else {
        $erreur = "Une erreur est survenue.";
    }
    ?>
