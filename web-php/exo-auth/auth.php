<?php 
/* auth.php */

require_once 'Dao/AuthRepository.php';

if(!empty($_POST)) {
    try {
        if(!isset($_POST['username'], $_POST['password'])) {
            throw new Exception('Formulaire incomplet');
        }

        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = AuthRepository::signIn($username, $password);

        if(empty($user)) {
            throw new Exception('Nom d\'utilisateur ou mot de passe incorrect !');
        }

        echo 'Bonjour '.$user['username'].', vous êtes connecté.';
    } 
    catch(Exception $ex) {
        echo $ex->getMessage();
    }
}