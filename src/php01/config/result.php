<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
echo "私の名前は、" . $name . "です" . "<br/>";
echo "ご希望の商品は、" . $product . "です" ."<br/>";

echo "注文数は、" . $quantity;
echo "<br/>";


$my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);
$choices = htmlspecialchars($_POST['choices'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

print "私の名前は、" . $my_name . "<br>";
print "ご希望の商品は、" . $choices . "<br>";
print "注文数は、" . $number;
