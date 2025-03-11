<?php
    $cookie_name = 'guest';
    $cookie_value = 'admin';
    setcookie($cookie_name, $cookie_value, time() + (3600 * 24),'/', )
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
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