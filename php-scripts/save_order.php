<?php
session_start(); // Start the session
include 'db_connection.php'; // Ensure the database connection

// Function to check if the user is logged in
function check_session() {
    if (isset($_SESSION['user_id']) && (time() - $_SESSION['last_activity']) <= $_SESSION['expire_time']) {
        $_SESSION['last_activity'] = time(); // Refresh session activity
        return $_SESSION['user_id'];
    } else {
        session_destroy(); // Destroy the session if expired or not valid
        return false;
    }
}

$user_id = check_session(); // Check if the user is logged in

if (!$user_id) {
    echo "Please log in to submit an order.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cake_category = $_POST['cake_category'];
    $cake_size = $_POST['cake_size'];
    $flavour = $_POST['flavour'];
    $frosting = $_POST['frosting'];
    $design = $_POST['design'];
    $delivery_date = $_POST['delivery_date'];
    $pickup_delivery = $_POST['pickup_delivery'];
    $delivery_fee = $pickup_delivery === 'delivery' ? 'To be paid via Uber' : null;
    $filling = $_POST['filling'];
    $cake_type = $_POST['cake_type'];

    // Handle image upload
    $cake_image_url = null;
    if (!empty($_FILES['cake_image']['name'])) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["cake_image"]["name"]);
        $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];

        // Validate file type
        if (!in_array($image_file_type, $allowed_types)) {
            echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
            exit;
        }

        // Validate file size (e.g., 5MB max)
        if ($_FILES["cake_image"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            exit;
        }

        if (move_uploaded_file($_FILES["cake_image"]["tmp_name"], $target_file)) {
            // Get the public URL of the uploaded image
            $cake_image_url = "http://localhost/Bee's_Treats/php-scripts/" . $target_file;
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit;
        }
    }

    // Prepare and execute the SQL query to insert order
    $stmt = $pdo->prepare("INSERT INTO cake_orders
        (user_id, cake_category, cake_size, flavour, frosting, cake_image_path, design, delivery_date, pickup_delivery, delivery_fee, filling, cake_type)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->execute([$user_id, $cake_category, $cake_size, $flavour, $frosting, $cake_image_url, $design, $delivery_date, $pickup_delivery, $delivery_fee, $filling, $cake_type]);

    // Debugging output to check if this block is executing
    echo "Order submitted successfully!<br>";

    // WhatsApp Web URL for message
    $order_details = "New Cake Order:\n";
    $order_details .= "Category: $cake_category\n";
    $order_details .= "Size: $cake_size\n";
    $order_details .= "Flavour: $flavour\n";
    $order_details .= "Frosting: $frosting\n";
    $order_details .= "Design: $design\n";
    $order_details .= "Delivery Date: $delivery_date\n";
    $order_details .= "Pickup/Delivery: $pickup_delivery\n";
    $order_details .= "Filling: $filling\n";
    $order_details .= "Cake Type: $cake_type\n";
    $order_details .= "Delivery Fee: $delivery_fee\n";

    // If an image was uploaded, include the URL of the image in the message
    if ($cake_image_url) {
        $order_details .= "Cake Image: $cake_image_url\n";
    }

    // Encode the order details for the WhatsApp URL
    $order_details_encoded = urlencode($order_details);

    // Generate WhatsApp Web link
    $whatsapp_url = "https://wa.me/+27619813621?text=$order_details_encoded";

    // Debugging output to check if this part is working
    echo "WhatsApp URL generated: $whatsapp_url<br>";

    // Generate a clickable link for WhatsApp
    echo "<a href='$whatsapp_url' target='_blank'>Click here to send your order to WhatsApp!</a>";
}
?>
