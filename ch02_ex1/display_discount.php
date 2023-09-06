<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <?php
        $tensp = filter_input(INPUT_POST, 'product_description');
        $gia_tien = filter_input(INPUT_POST, 'list_price');
        $giamgia= filter_input(INPUT_POST, 'discount_percent');

        $gia_duoc_giam = $gia_tien * $giamgia * .01;
        $tong_tien=$gia_tien-$gia_duoc_giam;
    ?>
 
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span ><?php echo htmlspecialchars($tensp); ?></span><br>

        <label>List Price:</label>
        <span><?php echo "$" . htmlspecialchars(number_format($gia_tien, 2)); ?></span><br>

        <label>Standard Discount:</label>
        <span ><?php echo htmlspecialchars($giamgia) . "%"; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo "$" . htmlspecialchars(number_format($gia_duoc_giam , 2)) ; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo "$" . htmlspecialchars(number_format($tong_tien, 2)) ; ?></span><br>
    </main>
</body>
</html>