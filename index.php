<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="Product_Discount_Calculator.css">
</head>
<body>
<div class="content">
    <h1> Product Discount Calculator </h1>
<form method="post" action="display_discount.php">
    <div class="product">
        <label>Product Description:</label> <input type="text" name="description" placeholder="description"><br/>
        <label>List Price:</label> <input type="text" name="price" placeholder="Price"><br/>
        <label>Discount Percent:</label> <input type="text" name="discount_percent" placeholder="discount percent"><br/>
    </div>
    <div class="buttons">
        <label>&nbsp;</label>
        <input type="submit" value="Calculator">
    </div>
</form>
</div>
</body>
</html>
