<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table>
    <tr>
        <th>PRODUCT_NAME</th>
        <th>PRODUCT_IMAGE</th>
        <th>PRODUCT_SKU</th>
        <th>PRICE</th>
        <th>BRAND</th>
        <th>MANUFACTURING_DATE</th>
        <th>AVAILABLE_STOCK</th>
    </tr>
    <?php foreach ($allProduct as $product): ?>
    <tr>
        <td><?php echo $product->product_name ?></td>
        <td><?php echo $product->product_image ?></td>
        <td><?php echo $product->SKU ?></td>
        <td><?php echo $product->price ?></td>
        <td><?php echo $product->brand ?></td>
        <td><?php echo $product->manufacturing_date ?></td>
        <td><?php echo $product->available_stock ?></td>
        <td>
            <form action="/edit" method="post">
                <input name="action" value="<?php echo $product->id ?>">
                <button type="submit">EDIT</button>
            </form>
        </td>
        <td>
            <form action="/delete" method="post">
                <input name="action" value="<?php echo $product->id ?>">
                <button type="submit">DELETE</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>