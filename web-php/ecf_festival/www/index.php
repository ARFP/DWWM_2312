<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidats</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Inscription candidat Jeu-Concours</h1>

    <form action="traitement.php" method="POST">
        <label for="monNom">Nom</label>
        <input type="text" id="monNom" name="nom" placeholder="votre nom" required>

        <label for="monPrenom">Prénom</label>
        <input type="text" id="monPrenom" name="prenom" placeholder="votre prénom" required>

        <label for="monEmail">email</label>
        <input type="email" id="monEmail" name="email" placeholder="identifiant" required>

        <label for="monPass1">Mot de passe</label>
        <input type="password" id="monPass1" name="pass1" placeholder="" required>

        <label for="monPass2">Vérification du Mot de passe</label>
        <input type="password" id="monPass2" name="pass2" placeholder="" required>

        <label>Département de votre domicile principal</label>
        <select name="id_dept">

            <?php 
                // Charge le fichier DepartRepository qui contient la méthode searchAll()
                require_once 'Dao/DepartRepository.php';
                // Instanciation de la classe (création d'un objet)
                $departRepository = new DepartRepository();
                // Appel de la méthode searchAll() qui permet de récupérer les départements
                $depts = $departRepository->searchAll();
                //var_export($depts);

                // Générer les <option>
                foreach($depts as $dept) {
                    echo '<option value="'.$dept['id_dep'].'">'.$dept['Name'].'</option>'."\n";
                }
            ?>
            
        </select>

        <label for="monAge">Votre âge</label>
        <input type="number" id="monAge" name="age" placeholder="18" required>

        <hr>

        <button type="submit">Valider</button>

        <input type="submit" value="Valider">

    </form>
    
</body>
</html>