<?php
session_start();

// Initialize the cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Function to add an item to the cart
function addToCart($item_id, $quantity) {
    if (isset($_SESSION['cart'][$item_id])) {
        // Item already exists in the cart, update quantity
        $_SESSION['cart'][$item_id] += $quantity;
    } else {
        // Add a new item to the cart
        $_SESSION['cart'][$item_id] = $quantity;
    }
}

// Function to clear the cart
function clearCart() {
    $_SESSION['cart'] = array();
}

// Process the form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['item_id']) && isset($_POST['quantity'])) {
        $item_id = $_POST['item_id'];
        $quantity = (int)$_POST['quantity'];

        // Validate quantity (ensure it's a positive integer)
        if ($quantity > 0 && $quantity == $_POST['quantity']) {
            addToCart($item_id, $quantity);
        }
    } elseif (isset($_POST['clear_cart'])) {
        // Handle clearing the cart
        clearCart();
    }
}

// Function to display the cart
function displayCart() {
    echo '<h2>Shopping Cart</h2>';

    if (empty($_SESSION['cart'])) {
        echo '<p>Your cart is empty.</p>';
        return;
    }

    echo '<table>';
    echo '<tr><th>Item</th><th>Quantity</th></tr>';

    foreach ($_SESSION['cart'] as $item_id => $quantity) {
        echo '<tr>';
        echo '<td>Item ' . $item_id . '</td>';
        echo '<td>';
        echo '<form action="cart.php" method="post">';
        echo '<input type="hidden" name="item_id" value="' . $item_id . '">';
        echo '<input type="number" name="quantity" value="' . $quantity . '" min="1">';
        echo '<input type="submit" value="Update">';
        echo '</form>';
        echo '</td>';
        echo '</tr>';
    }

    echo '</table>';
}

// Display the cart
displayCart();

// Add a form for clearing the cart
echo '<form action="cart.php" method="post">';
echo '<input type="hidden" name="clear_cart" value="1">';
echo '<input type="submit" value="Clear Cart">';
echo '</form>';

// Add a link to proceed to checkout if the cart is not empty
if (!empty($_SESSION['cart'])) {
    echo '<a href="checkout.php">Proceed to Checkout</a>';
}
?>
