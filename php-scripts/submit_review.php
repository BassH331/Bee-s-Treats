<?php
session_start();
include('db_connection.php'); // Ensure the connection is included

// Get the form data
$user_id = $_SESSION['user_id'];
$order_id = $_POST['order_id'];
$review = $_POST['review'];
$rating = $_POST['rating'];

// Insert the review into the database using PDO
$sql = "INSERT INTO reviews (user_id, order_id, review, rating) VALUES (:user_id, :order_id, :review, :rating)";
$stmt = $pdo->prepare($sql);

// Bind parameters to the query
$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
$stmt->bindParam(':order_id', $order_id, PDO::PARAM_INT);
$stmt->bindParam(':review', $review, PDO::PARAM_STR);
$stmt->bindParam(':rating', $rating, PDO::PARAM_INT);

try {
    // Execute the query
    $stmt->execute();
    echo "Review submitted successfully!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>
