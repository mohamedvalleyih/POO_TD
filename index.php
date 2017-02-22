<?php
require_once ('Paladin.php');
require_once ('Dragon.php');

$hero = new Paladin("Matheiu");

$hero-> showClasse();

echo "<br>";

$m = new Dragon("Agrougrou");

$m-> showType();