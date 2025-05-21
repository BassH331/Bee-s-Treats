<?php
// Check if the WhatsApp URL is passed as a parameter
if (isset($_GET['whatsapp_url'])) {
    $whatsapp_url = urldecode($_GET['whatsapp_url']);
} else {
    echo "No order details found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Submitted</title>
    <link rel="stylesheet" href="styles.css"> <!-- Optional: Add your styles here -->
</head>
<body>
    <div class="container">
        <h1>Order Submitted Successfully!</h1>
        <p>Your order has been submitted successfully. To finalize the order, please click the link below to send the details to WhatsApp:</p>
        <a href="<?php echo $whatsapp_url; ?>" target="_blank" class="whatsapp-link">Click here to send your order to WhatsApp!</a>
    </div>
</body>
</html>
