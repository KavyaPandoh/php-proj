<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_name = $_POST['item_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $sql = "INSERT INTO inventory (item_name, quantity, price) VALUES ('$item_name', '$quantity', '$price')";

    if ($conn->query($sql) === TRUE) {
        echo "Item added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Item</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Add New Item</h1>
    <form method="post" action="add_item.php">
        <label>Item Name:</label>
        <input type="text" name="item_name" required><br>

        <label>Quantity:</label>
        <input type="number" name="quantity" required><br>

        <label>Price:</label>
        <input type="number" step="0.01" name="price" required><br>

        <button type="submit">Add Item</button>
    </form>
</body>
</html>
