<?php
require_once ('Monstre.php');

/**
 * Created by PhpStorm.
 * User: Vali
 * Date: 22/02/2017
 * Time: 17:54
 */
class Salle
{
    protected $porte;
    protected $coffre;
    protected $monstre;


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
            <center><ul>
                    <li><a href="Observer.php"></a></li>
                </ul></center>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>


</body>
</html>