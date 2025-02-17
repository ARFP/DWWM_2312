<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
</head>
<body>
    <style>
        form { width: 800px; margin: auto; }
        label { display:inline-block; width: 200px;}
        div { margin: 10px; }
    </style>
    <form action="auth.php" method="POST">
        <div>
            <label for="myUsername">Nom d'utilisateur</label>
            <input type="text" name="username" id="myUsername">
        </div>
        <div>
            <label for="myPassword">Mot de passe</label>
            <input type="password" name="password" id="myPassword">
        </div>
        <div>
            <button type="submit">S'identifier</button>
        </div>
    </form>
</body>
</html>