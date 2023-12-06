<?php
session_start();

// Sample prices associated with each items
$itemPrices = array(
    1 => 12.99,
    2 => 9.99,
    3 => 10.99,
    4 => 11.99,
    5 => 8.99,
    6 => 15.99,
    7 => 13.99,
    8 => 12.99,
    9 => 16.99,
    10 => 11.99,
    11 => 10.99,
    12 => 9.99,
    13 => 7.99,
    14 => 13.99,
    15 => 12.99,
    16 => 16.99,
    17 => 19.99,
    18 => 10.99,
    // Add more prices for additional items as needed
);

// Retrieve information from session variables
$checkoutInfo = isset($_SESSION['checkout_info']) ? $_SESSION['checkout_info'] : null;
$cartItems = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

// Calculate total price
$totalPrice = 0;
foreach ($cartItems as $itemId) {
    if (isset($itemPrices[$itemId])) {
        $totalPrice += $itemPrices[$itemId];
    }
}

// Clear session variables
unset($_SESSION['checkout_info']);
unset($_SESSION['cart']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Order Confirmation</title>
</head>
<body>
    <header>
        <h1>Order Confirmation</h1>
    </header>
    
    <h2>Checkout Information:</h2>
    <p><strong>Delivery Option:</strong> <?php echo $checkoutInfo['delivery_option']; ?></p>
    <p><strong>Pickup Time:</strong> <?php echo $checkoutInfo['pick_up_time']; ?></p>
    <p><strong>Customer Name:</strong> <?php echo $checkoutInfo['customer_name']; ?></p>
    <p><strong>Email:</strong> <?php echo $checkoutInfo['customer_email']; ?></p>
    <p><strong>Phone Number:</strong> <?php
