<?php

$name = $_GET['name'] ?? '';
$email = $_GET['email'] ?? '';
$age = $_GET['age'] ?? '';

$message = 'Accesso ';

if(strlen($name) < 3 && !str_contains($email, '@') && !str_contains($email, '.') && !is_numeric($age)){
    $message .= 'non riuscito';
} else {
    $message .= 'riuscito';
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $message?></h1>
</body>
</html>