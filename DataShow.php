<?php
include("Connect.php");

$pid = isset($_REQUEST["id"]) ? intval($_REQUEST["id"]) : 0;
$pnm = "";
$price = "";
$qty = "";

if ($pid) {
    $stmt = $con->prepare("SELECT * FROM Product WHERE Product_id = ?");
    $stmt->bind_param("i", $pid);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($rec = $result->fetch_assoc()) {
        $pnm = $rec["Product_nm"];
        $price = $rec["Product_Price"];
        $qty = $rec["Product_QTY"];
    } else {
        die("Product ID $pid does not exist.");
    }
    $stmt->close();
} else {
    die("Invalid Product ID.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h2>Edit Product</h2>
        <form name="f1" method="post" action="Queries.php?cs=3">
            <label for="pid">Product ID (Read Only)</label>
            <!-- Using readonly attribute and a specific class if needed, but style.css handles inputs fairly well. 
                 Adding inline style override just for specific readonly visual cue if css doesn't cover it fully yet, 
                 or better: trust the css defaults for input. -->
            <input type="number" id="pid" name="pid" value="<?php echo htmlspecialchars($pid); ?>" readonly style="background-color: #e5e7eb; cursor: not-allowed;">
            
            <label for="pnm">Product Name</label>
            <input type="text" id="pnm" name="pnm" value="<?php echo htmlspecialchars($pnm); ?>" required>
            
            <label for="price">Price</label>
            <input type="number" id="price" name="price" value="<?php echo htmlspecialchars($price); ?>" required>
            
            <label for="qty">Quantity</label>
            <input type="number" id="qty" name="qty" value="<?php echo htmlspecialchars($qty); ?>" required>
            
            <input type="submit" name="s1" value="Update Product">
        </form>
    </div>
</body>
</html>