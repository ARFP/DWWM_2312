<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de l'impot sur le revenu</title>

</head>

<body>
    <style>
        label {
            display: inline-block;

            width: 150px;

        }

        fieldset {

            background-color: whitesmoke;
            border-radius: 12px;
            width: 30%;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 5px 5px 8px #555;
        }

        input[type=text],
        input[type=number] {

            margin-bottom: 15px;
        }

        #firstname {

            margin-top: 30px;
        }

        h3 {
            text-align: center;
        }
    </style>
    <?php
    require "./model/Contribuable.php";





    // var_export($_GET);

    if (isset($_GET["envoie"]) && !empty($_GET["firstname"]) && !empty($_GET["lastname"]) && !empty($_GET["income"])) {
        $monContribuable = new Contribuable($_GET["firstname"], $_GET["lastname"], floatval($_GET["income"]));

        echo "<h3> votre impot sera de :" . $monContribuable->calculImpot() . " € pour cette année </h3>";
    }



    ?>
    <form action="" method="get" enctype="text/plain">
        <fieldset>
            <legend>Coordonnées contribuable :</legend>
            <div>
                <label for="firstname">Votre nom :</label>
                <input type="text" name="firstname" id="firstname">


            </div>
            <div> <label for="lastname">Votre prénom :</label>
                <input type="text" name="lastname" id="lastname">

            </div>
            <div>
                <label for="income">Votre revenu annuel :</label>
                <input type="number" name="income" id="income" step="0.01" min="0">
            </div>

            <input type="submit" value="envoyer" name="envoie">
        </fieldset>
    </form>


</body>

</html>