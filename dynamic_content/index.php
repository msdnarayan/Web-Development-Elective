<?php

include 'config.php';

$hour = date('H');
if ($hour < 12) {
    $greeting = "Good Morning!";
} elseif ($hour < 18) {
    $greeting = "Good Afternoon!";
} else {
    $greeting = "Good Evening!";
}


$name = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic PHP Content</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?php echo $greeting; ?></h1>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name">
        <input type="submit" value="Submit">
    </form>

    <?php
    if (!empty($name)) {
        echo "<h2>Hello, $name!</h2>";
    }
    ?>
</body>
</html>
