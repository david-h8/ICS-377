<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exquisite Eats</title>
    <script src="script.js"></script>
</head>
<body>
    <header>
        <h1>Exquisite Eats</h1>
    </header>
    <!-- Add search input field and button -->
    <input type="text" id="searchInput" oninput="searchMenu()" placeholder="🔍 Search menu...">
    <section id="menu">
        <!-- Sample Menu Items -->
        <div class="menu-item">
            <img src="./img/Spaghetti Bolognese.jpeg" alt="Spaghetti Bolognese">
            <h2>Spaghetti Bolognese</h2>
            <p>Delicious spaghetti with meat sauce.</p>
            <p>$12.99</p>
            <form action="menu.php" method="post">
    <!-- Display "Remove from Cart" button if the item is already in the cart -->
            <?php if (isset($_SESSION['cart']) && in_array($item['Spaghetti Bolognese'], $_SESSION['cart'])): ?>
                    <button type="submit" name="remove-from-cart" value="<?php echo $item['id']; ?>" class="remove-from-cart">Remove from Cart</button>
    <!-- Display "Add to Cart" button if the item is not in the cart -->
                    <?php else: ?>
                    <button type="submit" name="add-to-cart" value="Spaghetti Bolognese" class="add-to-cart">Add to Cart</button>
            <?php endif; ?>
            </form>
        </div>

        <div class="menu-item">
            <img src="./img/Chicken Caesar.jpeg" alt="Chicken Caesar Salad">
            <h2>Chicken Caesar Salad</h2>
            <p>Fresh salad with grilled chicken.</p>
            <p>$9.99</p>
            <form action="menu.php" method="post">
                <input type="hidden" name="item_id" value="2">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
                <input type="submit" value="Add to Cart">
            </form>
        </div>
        <div class="menu-item">
            <img src="./img/Shrimp dumplings.jpeg" alt="Chicken Caesar Salad">
            <h2>Shrimp dumplings</h2>
            <p>Fresh salad with grilled chicken.</p>
            <p>$10.99</p>
            <form action="menu.php" method="post">
                <input type="hidden" name="item_id" value="3">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
                <input type="submit" value="Add to Cart">
            </form>
        </div>
        <div class="menu-item">
            <img src="./img/Soup dumplings.jpeg" alt="Chicken Caesar Salad">
            <h2>Soup dumplings </h2>
            <p>Fresh salad with grilled chicken.</p>
            <p>$11.99</p>
            <form action="menu.php" method="post">
                <input type="hidden" name="item_id" value="4">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
                <input type="submit" value="Add to Cart">
            </form>
        </div>
        <div class="menu-item">
            <img src="./img/Egg tart.jpeg" alt="Chicken Caesar Salad">
            <h2>Egg tart            </h2>
            <p>Fresh salad with grilled chicken.</p>
            <p>$8.99</p>
            <form action="menu.php" method="post">
                <input type="hidden" name="item_id" value="5">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
                <input type="submit" value="Add to Cart">
            </form>
        </div>
        <div class="menu-item">
            <img src="./img/Rice noodle rolls.jpeg" alt="Chicken Caesar Salad">
            <h2>Rice noodle rolls </h2>
            <p>Fresh salad with grilled chicken.</p>
            <p>$15.99</p>
            <form action="menu.php" method="post">
                <input type="hidden" name="item_id" value="6">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
                <input type="submit" value="Add to Cart">
            </form>
        </div>
        <div class="menu-item">
            <img src="./img/Chicken feet  .webp" alt="Chicken Caesar Salad">
            <h2>Chicken feet </h2>
            <p>Fresh salad with grilled chicken.</p>
            <p>$13.99</p>
            <form action="menu.php" method="post">
                <input type="hidden" name="item_id" value="7">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
                <input type="submit" value="Add to Cart">
            </form>
        </div>
        <div class="menu-item">
            <img src="./img/Barbecue pork buns  .jpeg" alt="Chicken Caesar Salad">
            <h2>Barbecue pork buns </h2>
            <p>Fresh salad with grilled chicken.</p>
            <p>$12.99</p>
            <form action="menu.php" method="post">
                <input type="hidden" name="item_id" value="8">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
                <input type="submit" value="Add to Cart">
            </form>
        </div>
        <div class="menu-item">
            <img src="./img/Shumai — a meat and vegetable dumpling.jpeg" alt="Chicken Caesar Salad">
            <h2>Shumai — a meat and vegetable dumpling</h2>
            <p>Fresh salad with grilled chicken.</p>
            <p>$16.99</p>
            <form action="menu.php" method="post">
                <input type="hidden" name="item_id" value="9">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
                <input type="submit" value="Add to Cart">
            </form>
        </div>
        <div class="menu-item">
            <img src="./img/Shuijiao — boiled dumplings.jpeg" alt="Chicken Caesar Salad">
            <h2>Shuijiao — boiled dumplings</h2>
            <p>Fresh salad with grilled chicken.</p>
            <p>$11.99</p>
            <form action="menu.php" method="post">
                <input type="hidden" name="item_id" value="10">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
                <input type="submit" value="Add to Cart">
            </form>
        </div>
        <div class="menu-item">
            <img src="./img/Tangjiao — soup dumplings.jpeg" alt="Chicken Caesar Salad">
            <h2>Tangjiao — soup dumplings </h2>
            <p>Fresh salad with grilled chicken.</p>
            <p>$10.99</p>
            <form action="menu.php" method="post">
                <input type="hidden" name="item_id" value="11">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
                <input type="submit" value="Add to Cart">
            </form>
        </div>
        <div class="menu-item">
            <img src="./img/Zhenjiao — steamed dumplings.jpeg" alt="Chicken Caesar Salad">
            <h2>Zhenjiao — steamed dumplings            </h2>
            <p>Fresh salad with grilled chicken.</p>
            <p>$9.99</p>
            <form action="menu.php" method="post">
                <input type="hidden" name="item_id" value="12">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
                <input type="submit" value="Add to Cart">
            </form>
        </div>
        <div class="menu-item">
            <img src="./img/Jianjiao — deep-fried dumplings.jpeg" alt="Chicken Caesar Salad">
            <h2>Jianjiao — deep-fried dumplings            </h2>
            <p>Fresh salad with grilled chicken.</p>
            <p>$7.99</p>
            <form action="menu.php" method="post">
                <input type="hidden" name="item_id" value="13">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
                <input type="submit" value="Add to Cart">
            </form>
        </div>
        <div class="menu-item">
            <img src="./img/Shrimp.jpeg" alt="Chicken Caesar Salad">
            <h2>Shrimp</h2>
            <p>Fresh salad with grilled chicken.</p>
            <p>$13.99</p>
            <form action="menu.php" method="post">
                <input type="hidden" name="item_id" value="14">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
                <input type="submit" value="Add to Cart">
            </form>
        </div>
        <div class="menu-item">
            <img src="./img/Fish  .jpeg" alt="Chicken Caesar Salad">
            <h2>Fish</h2>
            <p>Fresh salad with grilled chicken.</p>
            <p>$12.99</p>
            <form action="menu.php" method="post">
                <input type="hidden" name="item_id" value="15">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
                <input type="submit" value="Add to Cart">
            </form>
        </div>
        <div class="menu-item">
            <img src="./img/Mushrooms  .jpeg" alt="Chicken Caesar Salad">
            <h2>Mushrooms            </h2>
            <p>Fresh salad with grilled chicken.</p>
            <p>$16.99</p>
            <form action="menu.php" method="post">
                <input type="hidden" name="item_id" value="16">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
                <input type="submit" value="Add to Cart">
            </form>
        </div>
        <div class="menu-item">
            <img src="./img/Eggplant  .jpeg" alt="Chicken Caesar Salad">
            <h2>Eggplant</h2>
            <p>Fresh salad with grilled chicken.</p>
            <p>$19.99</p>
            <form action="menu.php" method="post">
                <input type="hidden" name="item_id" value="17">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
                <input type="submit" value="Add to Cart">
            </form>
        </div>
        <div class="menu-item">
            <img src="./img/Pickled vegetables.jpeg" alt="Chicken Caesar Salad">
            <h2>Pickled vegetables </h2>
            <p>Fresh salad with grilled chicken.</p>
            <p>$10.99</p>
            <form action="menu.php" method="post">
                <input type="hidden" name="item_id" value="18">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
                <input type="submit" value="Add to Cart">
            </form>
        </div>

        <!-- Add more menu items as needed -->
    </section>
    <a id="cart-button" href="cart.php"><span id="cart-icon">🛒</span>View Cart</a>
</body>
</html>