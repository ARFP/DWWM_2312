<?php 
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
    <title>Document</title>
</head>
<body>
    <h1>Profil</h1>
    <!-- Affichage des données de l'utilisateur -->
     <ul>
        <li>Identifiant: <?php echo $_SESSION['id']; ?></li>
        <li>Nom d'utilisateur: <?=$_SESSION['username']; ?></li>
     </ul>
     <a href="deconnexion.php">Se déconnecter</a> | 
     <a href="utilisateurs.php">Afficher tous les utilisateurs</a> |
     <a href="ajouter-utilisateur.php">Ajouter un nouvel utilisateur</a>
</body>
</html>