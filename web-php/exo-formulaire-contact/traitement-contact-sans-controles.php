<?php 

// Si la requpête est de type POST
if(!empty($_POST)) {

    try {
        // Contrôler que tous les champs ont été soumis
        // Si un champ est manquant, on lève une erreur
        if(!isset(
            $_POST['nom'], 
            $_POST['dateDeNaissance'],
            $_POST['email'], 
            $_POST['message'])
        ) {
            throw new Exception('Le formulaire est incomplet');
        }

        $nom = $_POST['nom'];
        $dateDeNaissance = $_POST['dateDeNaissance']; 
        $email = $_POST['email'];
        $message = $_POST['message'];


        // Affichage des données
        echo "<p>Nom: $nom</p>\n";
        echo "<p>Date de naissance: $dateDeNaissance</p>\n";
        echo "<p>Votre âge: $age</p>\n";
        echo "<p>Adresse email: $email</p>\n";
        echo "<p>Message: $message</p>\n";

    } catch(Exception $ex) {
        echo 'Erreur: '. $ex->getMessage();
    }

}
