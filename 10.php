<?php
    $cookie_name = 'session_id';
    setcookie($cookie_name, '123');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10</title>
</head>
<body>
    <?php 
        setcookie($cookie_name, '123', time() - 500);
        if (!isset($_COOKIE[$cookie_name])) {
            print('OK');
        } else {
            print('Значения '. $_COOKIE[$cookie_name]);
        }
    ?>
</body>
</html>