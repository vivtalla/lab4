<?php
echo "<link rel='stylesheet' type='text/css' href='style.css' />";
$user = $_POST["name"];
$password = $_POST["password"];
$peanutbutterQuantity = $_POST["peanutbutter"];
$jellyQuantity = $_POST["jelly"];
$breadQuantity = $_POST["bread"];
$shipping = $_POST["shipping"];

$totalPeanutbutter = $peanutbutterQuantity * 5;
$totalJelly = $jellyQuantity * 10;
$totalBread = $breadQuantity * 1;

$shippingPrice = 0;

if($shipping == "free")
{
  $shippingPrice = 0;
}
elseif($shipping == "overnight")
{
  $shippingPrice = 50;
}
elseif($shipping == "threeDay")
{
  $shippingPrice = 5;
}

$totalPrice = $totalPeanutbutter + $totalJelly + $totalBread +$shippingPrice;

echo "Welcome, ". $user. ".<br>";
echo "Your password is: ". $password. "<br>";

echo "You purchased ". $peanutbutterQuantity . " bottles of peanutbutter for $5.00 each. Peanut Butter Sub total: $". $totalPeanutbutter. ".00<br>";
echo "You purchased ". $jellyQuantity . " bottles of Jelly for $10.00 each. Jelly Sub total: $". $totalJelly. ".00<br>";
echo "You purchased ". $breadQuantity . " loafs of bread for $1.00 each. Bread Sub total: $". $totalBread. ".00<br>";

echo "You chose ". $shipping . "shipping that had a shipping price of $". $shippingPrice. ".00<br>";
echo "Your total cost is: $". $totalPrice. ".00<br>";


?>
