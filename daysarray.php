<?php
$days = [
    "Dimanche",
    "Lundi",
    "Mardi",
    "Mercredi",
    "Jeudi",
    "Vendredi",
    "Samedi"
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les jours de la semaine</title>
</head>

<body>
    <h1>Les jours de la semaine</h1>

    <p>
        Les jours de la semaine en français sont :
        <?php echo implode(", ", $days); ?>.
    </p>
</body>
</html>