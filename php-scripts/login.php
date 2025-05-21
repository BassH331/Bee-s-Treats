<?php
session_start();
include 'db_connection.php'; // Include your database connection script

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        // Prepare and execute the SQL query
        $stmt = $pdo->prepare("SELECT id, password FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        // Check if the user exists and the password is correct
        if ($user && password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['last_activity'] = time(); // Track session activity
            $_SESSION['expire_time'] = 3600; // 1 hour in seconds

            // Successful login response
            header("Location: ../html-pages/gallery.html"); // Redirect to gallery page
            exit(); // Ensure no further code is executed
        } else {
            // Invalid login credentials
            echo json_encode(['status' => 'error', 'message' => 'Invalid email or password.']);
        }
    } catch (Exception $e) {
        // Handle any errors
        echo json_encode(['status' => 'error', 'message' => 'An error occurred. Please try again later.']);
    }
}
?>
