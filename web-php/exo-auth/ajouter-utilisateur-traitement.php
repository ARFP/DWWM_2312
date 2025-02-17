<?php 

require_once 'Dao/AuthRepository.php';

session_start(); 

// Si la session est vide, on redirige vers le formulaire d'identification
if(empty($_SESSION)) {
    header('location: index.php');
    exit;
}

// Si la requête est de type POST
if(!empty($_POST)) {
    
    try {

        if(!isset($_POST['username'], $_POST['password'], $_POST['password2'])) {
            throw new Exception("Formulaire incomplet");
        }

        if(!preg_match('/^[a-zA-Z]{2,50}$/', $_POST['username'])) {
            throw new Exception('Nom d\'utilisateur non valide !');
        }

        $password = $_POST['password'];
        $password2  =$_POST['password2'];

        if($password !== $password2) {
            throw new Exception('Les mots de passe ne correspondent pas !');
        }

        if(mb_strlen($password) < 12) {
            throw new Exception('Le mot de passe est trop court !');
        }

        // Au moins 1 lettre minuscule
        if(!preg_match('/[a-z]{1,}/', $password)) {
            throw new Exception('Le mot de passe doit contenir au moins 1 lettre minuscule');
        }

        // Au moins 1 lettre majuscule
        if(!preg_match('/[A-Z]+/', $password)) {
            throw new Exception('Le mot de passe doit contenir au moins 1 lettre majuscule');
        }

        // Au moins 1 chiffre
        if(!preg_match('/[0-9]+/', $password)) {
            throw new Exception('Le mot de passe doit contenir au moins 1 chiffre');
        }

        // Au moins 1 caractère spécial (non-alphanumérique)
        if(!preg_match('/[^a-zA-Z0-9]+/', $password)) {
            throw new Exception('Le mot de passe doit contenir au moins 1 caractère spécial');
        }

        //echo "Les données sont valides : " . var_export($_POST, true);

        // Sauvegarder en base de données
        $ajoutOk = AuthRepository::addUser($_POST['username'], $password);

        if($ajoutOk === false) {
            echo "Erreur lors de l'ajout";
        } else {
            header('location: utilisateurs.php');
        }
        

    } catch(Exception $ex) {
        echo $ex->getMessage();
        exit;
    }
}