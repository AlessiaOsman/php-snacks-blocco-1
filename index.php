<?php
$folders = array_slice(scandir(getcwd()), 2);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>php-snacks-blocco-1</h1>
    <ul>
        <?php foreach ($folders as $folder) : ?>
            <li><a href="<?=$folder?>"><?= $folder?></a></li>
            <?php endforeach ?>
    </ul>
</body>

</html>