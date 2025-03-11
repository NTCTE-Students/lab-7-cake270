<?php
session_start();
session_unset(); // Удаляем все переменные сессии
session_destroy(); // Уничтожаем сессию
header("Location: login3.php"); // Перенаправляем на страницу входа
exit;
?>
