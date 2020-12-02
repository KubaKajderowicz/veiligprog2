<?php

if (isset($_POST['zoekopdracht'])){
    $zoekopdracht = $_POST['zoekopdracht'];
    echo htmlspecialchars("De zoekopdracht is: $zoekopdracht");
    echo "Geen resultaat gevonden!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS</title>
</head>
<body>
    <form method="POST" action="index.php">
        <input name="zoekopdracht" placeholder="Zoekopdracht">
        <input type="submit" value="Zoek">
    </form>
</body>
</html>