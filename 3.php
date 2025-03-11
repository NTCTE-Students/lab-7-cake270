<?php
    $cookie_name = 'preferences';
    $cookie_value = 'dark_mode';
    setcookie($cookie_name, $cookie_value, time() + (3600*24*7));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
</head>
<body>
    <?php 
        if (!isset($_COOKIE[$cookie_name])) {
            print('Нет установленых куки');
        } else {
            print('Значения '. $_COOKIE[$cookie_name]);
        }
    ?>
</body>
</html>