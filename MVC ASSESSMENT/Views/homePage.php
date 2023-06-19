<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <form method="post" action="/create">
<!--        <input hidden name="action" value="create">-->
        <label>Product Name: </label><br>
        <input type="text" name="product_name"><br>

        <label>Upload Image: </label><br>
        <input type="file" name="product_image"><br>

        <label>SKU: </label><br>
        <input type="text" name="product_sku"><br>

        <label>Enter Price: </label><br>
        <input type="number" name="product_price"><br>

        <label>Select Brand: </label><br>
        <select name="brands">
            <option name="brand">Brand 1</option>
            <option name="brand">Brand 2</option>
            <option name="brand">Brand 3</option>
            <option name="brand">Brand 4</option>
        </select><br>
<!--        -->
        <label>Manufacturing Date: </label><br>
        <input type="date" name="manufacturing_date"><br>
        <label>Available Stock </label><br>
        <input type="int" name="available_stock"><br>
        <button type="submit" >Submit</button>
    </form>
</body>
</html>