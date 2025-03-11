<?php
session_start();

// Устанавливаем first_visit_time при первом посещении
if (!isset($_SESSION['first_visit_time'])) {
    $_SESSION['first_visit_time'] = time();
}

// Обновляем last_visit_time при каждом посещении
$_SESSION['last_visit_time'] = time();

// Выводим информацию о времени посещений
$firstVisit = date('Y-m-d H:i:s', $_SESSION['first_visit_time']);
$lastVisit = date('Y-m-d H:i:s', $_SESSION['last_visit_time']);

?>

<!DOCTYPE html>
<html>
<body>
<h1>Информация о посещениях</h1>

<p>Время первого посещения: <?php echo ($firstVisit); ?></p>
<p>Время последнего посещения: <?php echo ($lastVisit); ?></p>

</body>
</html>
