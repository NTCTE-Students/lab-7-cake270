<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];
    $quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1; // количество по умолчанию 1

    if (!is_numeric($product_id) || $quantity <= 0) {
        die("Ошибка: Неверные данные товара.");
    }

    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['quantity'] += $quantity;
    } else {
        $_SESSION['cart'][$product_id] = ['quantity' => $quantity, 'name' => "Товар {$product_id}"]; // Замените "Товар {$product_id}" на реальное название товара
    }

    header('Location: cart.php');
    exit;
}

?>
