<?php
session_start();


if (!isset($_SESSION['username'])) {
    header("Location: login3.php"); 
    exit;
}

?>

<!DOCTYPE html>
<html>
<body>

<h1>Добро пожаловать, <?php echo ($_SESSION['username']); ?>!</h1>
<form method="post" action="logout3.php">
  <button type="submit">Выйти</button>
</form>

</body>
</html>
