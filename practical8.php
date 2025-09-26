<!-- Inventory Checker Using Arrays and Functions
Objective: To manage and query inventory data using associative arrays and function calls. -->
<?php
// Inventory data using associative array
$inventory = [
    "LAPTOP" => ["quantity" => 30, "price" => 60000],
    "LIGHT" => ["quantity" => 70, "price" => 1000],
    "LED" => ["quantity" => 20, "price" => 4000],
];

// Function to display full inventory
function displayInventory($items) {
    echo "<h2>Inventory List</h2>";
    foreach ($items as $item => $details) {
        echo "<p><strong>$item</strong>: Quantity = {$details['quantity']}, Price = ₹{$details['price']}</p>";
    }
}

// Function to check stock of a specific item
function checkStock($items, $itemName) {
    if (array_key_exists($itemName, $items)) {
        $qty = $items[$itemName]['quantity'];
        echo "<p><strong>$itemName</strong> is in stock: $qty units available.</p>";
    } else {
        echo "<p><strong>$itemName</strong> is not found in inventory.</p>";
    }
}

// Function to search items below a certain quantity threshold
function lowStockItems($items, $threshold) {
    echo "<h3>Items below $threshold units:</h3>";
    foreach ($items as $item => $details) {
        if ($details['quantity'] < $threshold) {
            echo "<p>$item: Only {$details['quantity']} units left</p>";
        }
    }
}

// Main execution
displayInventory($inventory);
checkStock($inventory, "LAPTOP");
checkStock($inventory, "LIGHT");
checkStock($inventory, "KEYBORD");
lowStockItems($inventory, 10);
?>
