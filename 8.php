<?php
    setcookie('font_size', 13);
    setcookie('color', 'red');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8</title>
</head>
<body>
    <?php 
            if (!isset($_COOKIE['font_size']) && !isset($_COOKIE['color'])) {
                print('Нет установленых куки');
            } else {
                print('font_size '. $_COOKIE['font_size']. '<br>');
                print('color '. $_COOKIE['color']. '<br>');
            }
    ?>
</body>
</html>