<?php
$product = "ChocoBites";
$user = "Alex"; //no 1
$pagbati = "Hello ". $user; //no 2
$offer = [
    "Item" => "ChocoBites",
    "Quantity" => 3,
    "Normal Price" => 300,
    "Promo" => 200
]; //no 3

$reg_price = $offer["Normal Price"]; //no 4
$offer_price = $offer["Quantity"] * $offer["Promo"]; //no 5
$saving = ($offer_price - $reg_price); //no 6
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChocoBites!</title>
    <link rel='stylesheet' href='css/styles.css'>
</head>
<body>
    <?php require "header.php"?>
    <?= "<h1>Hello $user!</h1>" //no 7?>
    <div class="savings">
        <?= "<h2>Save P $saving!</h2>"?>
    </div>
    <h2>Check out our offers!</h2>
    <?="<p>Buy 3 packs of $product for P $offer_price</p>" //no 10?>
    <?="<p>(Usual Price: $reg_price)</p>"?>
</body>
</html>
<?php include "footer.php"?>