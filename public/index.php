<?php
require $_SERVER['DOCUMENT_ROOT'] . "/src/function.php";
require $_SERVER['DOCUMENT_ROOT'] . "/src/data.php";
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions</title>
</head>
<body>
<h2>Exo 1</h2>
<p>affichage de "Hello Nite Owl" à l'aide d'une fonction avec "echo" :</p>
<?php // echo sayHello();?>
<h2>Exo 2</h2>
<p>affichage de "Hello Nite Owl" à l'aide d'une fonction qui retourne le nom :</p>
<?php
// $name = sayHello();
// echo $name;
?>
<h2>Exo 3</h2>
<p>affichage de "Hello Nite Owl" à l'aide d'une fonction avec un paramètre $name :</p>
<?php
$name = sayHello("Jean");
echo $name;
?>
<h2>Exo 4</h2>
<p>affichage de "Hello Nite Owl" à l'aide d'une fonction avec un paramètre $name :</p>
<?php
$name = sayHello("Jean");
echo $name;
?>
<h2>Exo 5</h2>
<p>Watchmen :</p>
<?php
$data = array(
    'Dr. Manhattan',
    'Ozymandias',
    'Silk Spectre',
    'Rorschach',
    'The comedian',
    'Nite Owl')
;

$name = whoAmI("Dr. Manhattan", $data);
echo $name;
?>
</body>
</html>
