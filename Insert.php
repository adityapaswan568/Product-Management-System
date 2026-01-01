<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h2>Add New Product</h2>
        <form name="f1" method="POST" action="Queries.php?cs=1">
            <label for="pid">Product ID</label>
            <input type="number" id="pid" name="pid" required>
            
            <label for="pnm">Product Name</label>
            <input type="text" id="pnm" name="pnm" required>
            
            <label for="price">Price</label>
            <input type="number" id="price" name="price" required>
            
            <label for="qty">Quantity</label>
            <input type="number" id="qty" name="qty" required>
            
            <input type="submit" name="s1" value="Add Product">
        </form>
    </div>
</body>
</html>