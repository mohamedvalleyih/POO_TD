<?php

?>
<!DOCTYPE html>
<html>
<head>

    <title>Selectioner un personnage</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body class="selec">
<div>
    <div class="col-md-1"></div>
    <div class="col-md-10">
    <div class="row">

        <div class="col-md-4" id="character">
            <h2>Paladin</h2>
            <center><img src="paladin.png" height="400px" width="300px">
            <form action="game.php">
                Nom de votre personnage: <br><input type="text" name="Nom" >
                <input type="submit" value="commencer">
            </form></center>
        </div>

        <div class="col-md-4" id="character">
            <center><h2>Barbare</h2>
            <img src="barbare.png" height="400px" width="300px">
            <form action="game.php">
                Nom de votre personnage: <br><input type="text" name="Nom" >
                <input type="submit" value="commencer">
            </form></center>
        </div>

        <div class="col-md-4" id="character">
            <h2>Magicien</h2>
            <center><img src="mage.png" height="400px" width="300px">
            <form action="game.php">
                Nom de votre personnage: <br><input type="text" name="Nom" >
                <input type="submit" value="commencer">
            </form>
            </center>
        </div>
    </div>
    </div>
    <div class="div-col-1"></div>

</div>
</body>
</html>

