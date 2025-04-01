<?php 
    require_once 'Dao/AuthRepository.php';

    session_start(); 

    // Si la session est vide, on redirige vers le formulaire d'identification
    if(empty($_SESSION)) {
        header('location: index.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs</title>
    <style>
        table, th, td { border: 1px solid blue; border-collapse: collapse; }
        th, td { padding: 5px; }
    </style>
</head>
<body>
    <h1>Liste des utilisateurs</h1>
    <table>
        <thead>
            <tr>
                <td>Identifiant</td>
                <td>Nom d'utilisateur</td>
            </tr>
        </thead>
        <tbody>
        <?php 
            // Récupérer les utilisateurs à partir de la base de données
            $utilisateurs = AuthRepository::getAllUsers();

            // echo 'Il y a ' .count($utilisateurs). ' utilisateurs enregistrés';
            
            // boucle pour afficher tous les utilisateurs
            foreach($utilisateurs as $unUtilisateur) {
                echo '<tr>';
                echo '<td>' . $unUtilisateur['id'] . '</td>';
                echo '<td>' . $unUtilisateur['username'] . '</td>';
                echo '</tr>';
            }
        ?>
        </tbody>
    </table>
    
</body>
</html>