<?php
    $cookie_name = 'theme';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        ☀️<input type="radio" name="theme" value="light" checked>
        🌙<input type="radio" name="theme" value="dark">
        <input type="submit" value="изменить">

    </form>
    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cookie_value = $_POST['theme'];
        setcookie($cookie_name, $cookie_value); }
        if (!isset($_COOKIE[$cookie_name])) {
            print('Нет установленых куки');
        } else {
            print('ТЕМА '. $_COOKIE[$cookie_name]);
        }
    ?>
</body>
</html>