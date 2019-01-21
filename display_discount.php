<?php
$description = $_POST['description'];
$price = $_POST['price'];
$discount_percent = $_POST['discount_percent'];
$discount = $price * $discount_percent * .01;
$discount_price = $price - $discount;
$price_format = "$".number_format($price,2);
$discount_percent_format = $discount_percent."%";
$discount_format = "$".number_format($discount,2);
$discount_price_format = "$".number_format($discount_price,2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="Product_Discount_Calculator.css">
</head>
<body>
<div class="content">
    <h1>Product Discount Calculator</h1>
    <label>Product Description:</label> <span><?php echo $description;?><span><br/>
            <label>List Price:</label> <span><?php echo $price_format;?><span><br/>
       <label>Discount Percent:</label> <span><?php echo $discount_percent_format;?><span><br/>
        <label>Discount:</label> <span><?php echo $discount_format;?><span><br/>
         <label>Discount_Price:</label> <span><?php echo $discount_price_format;?><span><br/>
</div>
</body>
</html>