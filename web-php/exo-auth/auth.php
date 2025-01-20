<?php 
/* auth.php */

require_once 'Dao/AuthRepository.php';

// Démarre la session et initialise le tableau $_SESSION
session_start();

if(!empty($_POST)) {
    try {
        if(!isset($_POST['username'], $_POST['password'])) {
            throw new Exception('Formulaire incomplet');
        }

        // 1. Récupérer et contrôler les données du formulaire

        // Si le nom d'utilisateur ne correspond pas à l'expression régulière
        if(!preg_match('/^[a-zA-Z]{2,50}$/', $_POST['username'])) {
            throw new Exception('Nom d\'utilisateur invalide');
        }

        // si le mot de passe est inférieur à 6 caractères
        if(mb_strlen($_POST['password']) < 6) {
            throw new Exception('Mot de passe trop court');
        }

        // Authentification
        $user = AuthRepository::signIn($_POST['username'], $_POST['password']);

        // Si $user est vide, l'authentification a échoué
        if(empty($user)) {
            throw new Exception('Nom d\'utilisateur OU mot de passe incorrect');
        }

        // Affichage
         //echo "Bonjour ". $user['username'] ." Vous êtes connecté !";

        // Sauvegarder les données de l'utilisateur en Session $_SESSION
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        //var_export($_SESSION);


        // Rediriger vers une page "profil.php"
        header('location: profil.php');
        exit;


        /**
         * 1. Récupérer les données du formulaire
         * 2. Invoquer la méthode de la classe AuthRepository pour vérifier les identifiants fournis
         * 3. Si les identifiants sont incorrects: lever une erreur
         * 4. Si les identifiants sont corrects: 
         *      Rediriger vers une page "profil.php" qui affiche : 
         *          a. "Bonjour $username, vous êtes connecté" 
         *          b. Les informations de l'utilisateur identifié
         *          c. 3 liens : 
         *              - "Se déconnecter": déconnecte l'utilisateur et le redirige vers le formulaire d'identification
         *              - "Afficher tous les utilisateurs" : redirige vers une page qui liste tous les utilisateurs
         *              - "Ajouter une nouvel utilisateur": redirige vers un formulaire permettant l'ajout d'une utilisateur
         */


    } 
    catch(Exception $ex) {
        echo $ex->getMessage();
    }
}