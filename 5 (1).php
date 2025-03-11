<?php
    $cookie_name = 'visited';
    $cookie_value = 0;
    setcookie($cookie_name, $cookie_value);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5</title>
</head>
<body>
    <?php 
         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $cookie_value = $_POST['theme'];
            setcookie($cookie_name, $cookie_value); }
    ?>
</body>
</html>