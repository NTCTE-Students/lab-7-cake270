<?php
    $cookie_name = 'country';
    $cookie_value = 'Russia';
    setcookie($cookie_name, $cookie_value);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6</title>
</head>
<body>
    <?php 
            if (!isset($_COOKIE[$cookie_name])) {
                print('Нет установленых куки');
            } else {
                print('ПРИВЕТ '. $_COOKIE[$cookie_name]. '🪆🪆🪆🐻🐻🐻');
            }
    ?>
</body>
</html>