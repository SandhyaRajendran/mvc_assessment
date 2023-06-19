<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<!--<h1>welcome</h1>-->
<?php foreach ($editProduct as $edit): ?>
<form action="/update" method="post">
    <label>Product Name: </label><br>
    <input type="text" name="product_name" value="<?php echo $edit->product_name ?>"><br>

    <label>Upload Image: </label><br>
    <input type="file" name="product_image" value="<?php echo $edit->product_image ?>"><br>

    <label>SKU: </label><br>
    <input type="text" name="product_sku" value="<?php echo $edit->SKU ?>"><br>

    <label>Enter Price: </label><br>
    <input type="number" name="product_price" value="<?php echo $edit->price ?>"><br>

    <label>Select Brand: </label><br>
    <select name="brands">
        <option name="brand" value="brand_one">Brand 1</option>
        <option name="brand" value="brand_two">Brand 2</option>
        <option name="brand" value="brand_three">Brand 3</option>
        <option name="brand" value="brand_four">Brand 4</option>
    </select><br>
    <label>Manufacturing Date: </label><br>
    <input type="date" name="manufacturing_date" value="<?php echo $edit->manufacturing_date ?>"><br>
    <label>Available Stock </label><br>
    <input type="int" name="available_stock" value="<?php echo $edit->available_stock ?>"><br>
    <button type="submit" name="action" value="delete">UPDATE</button>
</form>
<?php endforeach; ?>
</body>
</html>