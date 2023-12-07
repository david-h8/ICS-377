<!-- checkout.php -->

<?php
session_start();

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission, e.g., process delivery option and pick-up time
    $deliveryOption = $_POST['delivery_option'];
    $pickUpTime = $_POST['pick_up_time'];
    $customerName = $_POST['customer_name'];
    $customerEmail = $_POST['customer_email'];
    $customerPhone = $_POST['customer_phone'];
    $deliveryAddress = ($deliveryOption === 'delivery') ? $_POST['delivery_address'] : '';

    // Store information in session variables
    $_SESSION['checkout_info'] = array(
        'delivery_option' => $deliveryOption,
        'pick_up_time' => $pickUpTime,
        'customer_name' => $customerName,
        'customer_email' => $customerEmail,
        'customer_phone' => $customerPhone,
        'delivery_address' => $deliveryAddress
    );

    // Store cart items in session variable
    $_SESSION['cart'] = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
    array_push($_SESSION['cart'], 1, 2, 3); // Sample item IDs, adjust as needed

    // Redirect to confirmation page
    header('Location: confirmation.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Checkout</title>
    <script>
        // Function to toggle the visibility of the delivery address field
        function toggleDeliveryAddress() {
            var deliveryOption = document.getElementById('deliveryOption');
            var deliveryAddressField = document.getElementById('deliveryAddressField');

            if (deliveryOption.value === 'delivery') {
                deliveryAddressField.style.display = 'block';
            } else {
                deliveryAddressField.style.display = 'none';
            }
        }
    </script>
</head>
<body>
    <header>
        <h1>Checkout</h1>
    </header>
    <nav>
      <a href="index.html">Menu</a>
      <a href="catering.html">Catering Menu</a>
    </nav>
    <form action="checkout.php" method="post">
        <label for="customerName">Customer Name:</label>
        <input type="text" id="customerName" name="customer_name" required>

        <label for="customerEmail">Email:</label>
        <input type="email" id="customerEmail" name="customer_email" required>

        <label for="customerPhone">Phone Number:</label>
        <input type="tel" id="customerPhone" name="customer_phone" required>

        <label for="deliveryOption">Delivery Option:</label>
        <select id="deliveryOption" name="delivery_option" onchange="toggleDeliveryAddress()">
            <option value="delivery">Delivery</option>
            <option value="pickup">Pickup</option>
        </select>

        <div id="deliveryAddressField" style="display: none;">
            <label for="deliveryAddress">Delivery Address:</label>
            <textarea id="deliveryAddress" name="delivery_address"></textarea>
        </div>

        <label for="pickUpTime">Pickup Time:</label>
        <input type="time" id="pickUpTime" name="pick_up_time" required>

        <input type="submit" value="Place Order">
    </form>
</body>
</html>

