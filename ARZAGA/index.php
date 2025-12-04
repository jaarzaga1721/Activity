<?php
$user = 'Ivy';
$pagbati = 'Hello, ';
$offer = [  
    [ "Chocolate", 5,  25, 20],

];

$reg_price = $offer[0][1] * $offer[0][2];
$offer_price = $offer[0][1] * $offer[0][3] ;
$saving = $offer_price - $reg_price;

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
    <h1>The Candy Store</h1>

    <h2>Multi-Buy Offer</h2>

    <?= $pagbati. $user ?>

    <p>Buy <?= $offer[0][1] ?> packs of <?= $offer[0][0]?> for $ <?= $offer[0][3] ?></p>
    <p>(usual price $ <?=$offer[0][2]?>)</p>


    <div class="button">Save $5</div>


<?php include 'includes/footer.php';?>      

    
</body>
</html>