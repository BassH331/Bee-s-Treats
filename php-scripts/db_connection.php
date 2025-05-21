<?php
// Database configuration
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'mysql';
$db_name = 'cake_orders';


try {
    // Create PDO connection
    $dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8";
    $pdo = new PDO($dsn, $db_user, $db_password);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optionally, you can echo a success message or remove this line later
    // echo "Connected successfully";
} catch (PDOException $e) {
    // If connection fails, show the error message
    die("Connection failed: " . $e->getMessage());
}
?>
