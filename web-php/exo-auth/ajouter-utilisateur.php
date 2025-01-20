<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form { width: 800px; margin: auto; }
        label { display:inline-block; width: 200px;}
        div { margin: 10px; }
    </style>
</head>
<body>
    <h1>Ajouter un utilisateur</h1>
    <form action="./ajouter-utilisateur-traitement.php" method="POST">
        <div>
            <label for="myUsername">Nom d'utilisateur</label>
            <input type="text" name="username" id="myUsername">
        </div>
        <div>
            <label for="myPassword">Mot de passe</label>
            <input type="password" name="password" id="myPassword">
        </div>
        <div>
            <label for="myPassword2">Répéter Mot de passe</label>
            <input type="password" name="password2" id="myPassword2">
        </div>
        <div>
            <button type="submit">S'identifier</button>
        </div>
    </form>
    
</body>
</html>