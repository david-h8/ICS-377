<?php
session_start();

// Dummy catering menu items
$cateringMenuItems = [
    ['id' => 101, 'name' => 'Spaghetti Bolognese', 'count' => '12', 'price' => 50.00, 
        'image'=>'./img/Spaghetti Bolognese.jpeg', 'description' => 'Delicious spaghetti with meat sauce.'],
    ['id' => 102, 'name' => 'Chicken Caesar Salad', 'count' => '12', 'price' => 45.00, 
        'image'=>'./img/Chicken Caesar.jpeg', 'description' => 'Fresh salad with grilled chicken.'],
    ['id' => 103, 'name' => 'Soup Dumplings', 'count' => '12', 'price' => 40.00, 
        'image'=>'./img/Soup dumplings.jpeg', 'description' => 'Dumplings filled with seasoned pork and soup.'],
    ['id' => 104, 'name' => 'Shrimp', 'count' => '12', 'price' => 50.00, 
        'image'=>'./img/Shrimp.jpeg', 'description' => 'Wok-tossed shrimp cooked to perfection with a symphony of vibrant vegetables.'],
];

// Function to add items to the cart
function addToCart($itemId) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (!in_array($itemId, $_SESSION['cart'])) {
        $_SESSION['cart'][] = $itemId;
    }
}

// Function to remove items from the cart
function removeFromCart($itemId) {
    if (isset($_SESSION['cart'])) {
        $index = array_search($itemId, $_SESSION['cart']);
        if ($index !== false) {
            unset($_SESSION['cart'][$index]);
        }
    }
}

// Check if a form is submitted for adding or removing items
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add-to-cart'])) {
        $itemId = $_POST['add-to-cart'];
        addToCart($itemId);
    } elseif (isset($_POST['remove-from-cart'])) {
        $itemId = $_POST['remove-from-cart'];
        removeFromCart($itemId);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catering Menu</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }

        #catering-menu {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            max-width: 800px;
            margin: 20px auto;
        }

        .menu-item {
            border: 1px solid #ddd;
            margin-bottom: 20px;
            padding: 10px;
            text-align: center;
            width: 200px;
        }

        button {
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .add-to-cart {
            background-color: #4caf50;
            color: white;
        }

        .remove-from-cart {
            background-color: #ff9800;
            color: white;
        }
        #cart-button {
            display: inline-block;
            background-color: #4caf50;
            color: white;
            padding: 1rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        #cart-icon {
            margin-right: 8px;
        }
        #cart-button, cart-icon{position: fixed;bottom: 0;right: 0;}
    </style>
    <script src="script.js"></script>
</head>
<body>

<header>
    <h1>Catering Menu</h1>
    <!-- Add search input field and button -->
    <input type="text" id="searchInput" oninput="searchMenu()" placeholder="🔍 Search menu...">
</header>
<section id="menu">
<div id="catering-menu">
    <?php foreach ($cateringMenuItems as $item): ?>
        <div class="menu-item">
            <img src="<?php echo $item['image'];?>" alt="<?php echo $item['name'];?>">
            <h2><?php echo $item['name']; ?></h2>
            <p class='description'><?php echo$item['description']; ?></p>
            <p>serves <?php echo$item['count']; ?> </p>
            <p><strong>$<?php echo $item['price']; ?></strong></p>
            <form method="post" action="e.php">
                <?php if (isset($_SESSION['cart']) && in_array($item['id'], $_SESSION['cart'])): ?>
                    <button type="submit" name="remove-from-cart" value="<?php echo $item['id']; ?>" class="remove-from-cart">Remove from Cart</button>
                <?php else: ?>
                    <button type="submit" name="add-to-cart" value="<?php echo $item['id']; ?>" class="add-to-cart">Add to Cart</button>
                <?php endif; ?>
            </form>
        </div>
    <?php endforeach; ?>
</div> <!-- end catering menu div -->
</section>
<a id="cart-button" href="cart.php"><span id="cart-icon">🛒</span>View Cart</a>
</body>
</html>
