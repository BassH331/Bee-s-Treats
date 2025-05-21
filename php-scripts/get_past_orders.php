<?php
// Include database connection (adjust to your setup)
include('db_connection.php');

// Start a session to retrieve the current user's ID
session_start();
$user_id = $_SESSION['user_id'];  // Assuming user is logged in and user ID is stored in the session

// Query the database for past orders of the logged-in user
$query = "SELECT * FROM cake_orders WHERE user_id = ? ORDER BY created_at DESC";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id); // Bind the user ID to the query
$stmt->execute();
$result = $stmt->get_result();

// Fetch all orders and return as JSON
$orders = [];
while ($row = $result->fetch_assoc()) {
    $orders[] = [
        'order_id' => $row['id'],
        'cake_category' => $row['cake_category'],
        'cake_size' => $row['cake_size'],
        'flavour' => $row['flavour'],
        'frosting' => $row['frosting'],
        'delivery_date' => $row['delivery_date'],
        'pickup_delivery' => $row['pickup_delivery'],
        'cake_image' => $row['cake_image_path']  // Adding the image path
    ];
}

// Return the data as JSON
echo json_encode($orders);
?>
