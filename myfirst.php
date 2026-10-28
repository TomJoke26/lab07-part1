<?php
$marks = [85, 85, 95];
$marks[1] = 90;

$ave = array_sum($marks) / count($marks);

if ($ave >= 50) {
    $status = "PASSED";
} else {
    $status = "FAILED";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result</title>
</head>
<body>
    <h1>Student Result</h1>
    <p>Average mark: <?php echo $ave; ?></p>
    <p>Status: <?php echo $status; ?></p>
</body>
</html>