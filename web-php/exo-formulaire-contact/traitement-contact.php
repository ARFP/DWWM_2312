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

        // contrôle de saisie

        // Si le nom ne contient pas que des lettres
        // Si le nombre de caractères est inférieur à 2 ou supérieur à 50
        // Erreur
        if(!preg_match('/^[a-zA-Z]{2,50}$/', $nom)) {
            throw new Exception('Le format du nom est incorrect');
        }

        // Contrôler le format de la date
        // Si le format est incorrect, Datetime lève une exception.
        $date = new DateTime($dateDeNaissance);  // 2025-01-14 00:00:00
        $auj = new DateTime(); // 2025-01-14 16:08:35
        // Définit l'heure minute et seconde à 0
        $auj->setTime(0, 0, 0, 0); // 2025-01-14 00:00:00

        // Si la date fournie est supérieure ou égale à la date du jour
        // Erreur
        if($date >= $auj) {
            throw new Exception('La date doit être dans le passé !');
        }

        // Contrôler l'email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('L\email est invalide');
        }

        // Supprime les éventuelles balises HTML
        // Permet d'éviter l'injection de <script>
        $message = strip_tags($message);

        // A partir de ce point, on considère que les données sont valides

        // contrôle de l'âge !

        // Calculer la différence entre les 2 dates
        $diff = $date->diff($auj);
        $age =  $diff->format('%y');

        if($age < 18) {
            throw new Exception('Vous êtes mineur !');
        }


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
