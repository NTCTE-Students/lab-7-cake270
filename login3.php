
<?php
session_start();
$error = ''; // переменная для хранения сообщения об ошибке

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  if (empty($username)) {
    $error = "Пожалуйста, введите имя пользователя";
  } else {
    $_SESSION['username'] = $username;
    header("Location: welcome3.php"); // Перенаправление после успешного входа
    exit;
  }
}
?>

<!DOCTYPE html>
<html>
<body>
  <h1>Вход</h1>
  <?php if ($error): ?>
    <p style="color: red;"><?php echo $error; ?></p>
  <?php endif; ?>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Имя пользователя: <input type="text" name="username"><br>
    <button type="submit">Войти</button>
  </form>
</body>
</html>
