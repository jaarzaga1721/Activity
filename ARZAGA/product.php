<?php
$user = 'Ivy';
$pagbati = 'Hello, ';


if ($user != ""){
    $greetuser = 'Welcome back, '.$user;
}

$product= "Lollipop";
$cost= 10;

$totals = [];
for ($c = 1; $c <= 15; $c++){
    $subtotal = $cost * $c;
    $discount = (($cost/100) * ($c * 4));
    $total[$c]= $subtotal - $discount;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Candy Store</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>


<body>
    <?php include 'includes/header.php';?>      



    <h2>Lollipop Discounts</h2>

    <?= $greetuser?>

    <table>
                <tr>
                    <th>Packs</th>
                    <th>Price</th>
                    
                </tr>
<?php
    foreach ($totals as $qty => $price){
    $packword = ($qty == 1)? "pack" : "packs";
    echo"<tr>";
    echo"<td>$qty $packword</td>";
    echo"<td>$". number_format($price, 2)."</td>";
    echo "</tr>";



}
?>
    </table>       
    <hr>




<?php include 'includes/footer.php';?>      

    
</body>
</html>