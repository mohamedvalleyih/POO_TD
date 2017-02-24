
<?php


function Choix(){

    if (!empty($_POST['second'])) {
        $choix = $_POST["second"];
    }
    elseif (!empty ($_POST["combat"])) {
        $choix = "coffre" ;
    }
    elseif (!empty ($_POST["fuir"])) {
        $choix = "fuir" ;
    }

    else {
        $choix = "arrivée";
    }


    switch ($choix){
        case "arrivée":
            echo "La salle est vide ! Prenez les ascaliers vers le prochain niveau";
            ?><br>
            <form action="game.php" method="POST">
                <input type="hidden" value="second" name="second">
                <input type="submit" value="Avancer">
            </form>
            <?php

            break;
        case "second":
            echo "Un monstre vous attaque !";
            ?><form action="game.php" method="POST">
            <input type="hidden" value="combat" name="combat">
            <input type="submit" value="combat">
        </form><?php
            ?><form action="game.php" method="POST">
            <input type="hidden" value="fuir" name="fuir">
            <input type="submit" value="fuir">
        </form><?php
            break;
        case "coffre":
            echo "Vous trouvez un coffre !";
            ?><br><button class="button button5"><a href="game_over.php">Ouvrir le coffre</a></button><?php
            break;
        case "fuir":
            echo "Vous vous etes enfuis, mais vous retournez a la premiére salle!";
            ?><br><button class="button button5"><a href="game.php">ok</a></button><?php
            break;
        ;
    }
}




?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Salle</title>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="background-color: saddlebrown; margin-top: 5%">
            <center><p style="color: white">Vous arrivez dans une nouvelle salle !<br>
                    Que voulez-vous faire ?</p></center>
        </div>
        <div class="col-md-4"></div>
    </div>


    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="background-color: saddlebrown; margin-top: 5%">
            <?php
            $choix = "arrivée";
            Choix();
            ?>
        </div>
        <div class="col-md-4"></div>
    </div>


</div>


</body>
</html>

