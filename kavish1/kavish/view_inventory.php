<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Inventory</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Inventory</h1>
    <table>
        <tr>
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Last Updated</th>
        </tr>
        <?php
        $sql = "SELECT * FROM inventory";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row['item_name'] . "</td>
                    <td>" . $row['quantity'] . "</td>
                    <td>$" . $row['price'] . "</td>
                    <td>" . $row['last_updated'] . "</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No items in inventory</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
