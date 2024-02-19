<?php

$matches = [
    [
        "home_team" => "Los Angeles Lakers",
        "away_team" => "Boston Celtics",
        "home_score" => 102,
        "away_score" => 98

    ],
    [
        "home_team" => "Golden State Warriors",
        "away_team" => "Houston Rockets",
        "home_score" => 115,
        "away_score" => 110
    ],
    [
        "home_team" => "Chicago Bulls",
        "away_team" => "Miami Heat",
        "home_score" => 95,
        "away_score" => 92
    ],
    [
        "home_team" => "Toronto Raptors",
        "away_team" => "Philadelphia 76ers",
        "home_score" => 108,
        "away_score" => 104
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Partite</h1>
    <ul>
        <?php foreach ($matches as $match) : ?>
            <li><?= $match['home_team']?> - <?= $match['away_team'] ?> | <?= $match['home_score']?> - <?= $match['away_score']?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>