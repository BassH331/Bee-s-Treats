<?php
include 'db_connection.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (name, surname, phone, email, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$name, $surname, $phone, $email, $password]);

    echo "Sign-up successful!";
}
?>
