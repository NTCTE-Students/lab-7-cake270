<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Корзина</title>
</head>
<body>
<h1>Ваша корзина:</h1>

<?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])): ?>
    <table>
        <thead>
            <tr>
                <th>ID товара</th>
                <th>Название товара</th>
                <th>Количество</th>
                <th>Удалить</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($_SESSION['cart'] as $product_id => $item): ?>
                <tr>
                    <td><?php echo htmlspecialchars($product_id); ?></td>
                    <td><?php echo htmlspecialchars($item['name']); ?></td>
                    <td><?php echo htmlspecialchars($item['quantity']); ?></td>
                    <td><a href="removefromcart.php?product_id=<?php echo urlencode($product_id); ?>">Удалить</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Корзина пуста.</p>
<?php endif; ?>
</body>
</html>
