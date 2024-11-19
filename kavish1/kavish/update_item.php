<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $sql = "UPDATE inventory SET quantity='$quantity', price='$price' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Item updated successfully!";
    } else {
        echo "Error updating item: " . $conn->error;
    }
}
$conn->close();
?>
