<?php
$user = "Alex";//pt2 no 1
$greet = "Hello ". $user; //pt2 no 2
if($user){
    $greet = "Welcome back ". $user. "~"; //pt2 no 3
};
$cost = 100;


for($i=1; $i<=10; $i++){
    $subtotal = $cost * $i;
    $discount = $cost / 100 * 4;
    $totals = [$i => $subtotal - $discount];
}; //pt2 no 7-11(?)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel='stylesheet' href='css/styles.css'>
</head>
<body>
    <?php require "header.php" //pt2 no 12?>
    <br>
    <?= $greet//pt2 no 13?>
    <h2>ChocoBites Discounts:<!--pt2 no 14--></h2>

    <?php foreach($array1 as $totals){

    };
    ?>
</body>
</html>
<?php include "footer.php"?>