<?php
include("Connect.php");
$sql = "SELECT * FROM Product ORDER BY Product_id";
$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                while ($rec = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                ?>
                    <tr>
                        <td><?php echo htmlspecialchars($rec["Product_id"]); ?></td>
                        <td><?php echo htmlspecialchars($rec["Product_nm"]); ?></td>
                        <td><?php echo htmlspecialchars($rec["Product_Price"]); ?></td>
                        <td><?php echo htmlspecialchars($rec["Product_QTY"]); ?></td>
                        <td>
                            <a href="DataShow.php?id=<?php echo $rec['Product_id']; ?>" class="action-btn">Edit</a>
                            <a href="Queries.php?cs=2&id=<?php echo $rec['Product_id']; ?>" onclick="return confirm('Are you sure you want to delete this?');" class="action-btn delete-btn">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>