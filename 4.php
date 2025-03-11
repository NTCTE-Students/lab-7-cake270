<?php
    $cookie_name = 'language';
    $cookie_value = 'English';
    setcookie($cookie_name, $cookie_value, time() + (3600*2));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4</title>
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