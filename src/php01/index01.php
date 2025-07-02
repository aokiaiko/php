<?php

$a = 5;
$b = "5";

var_dump($a == $b);  // true（型は無視して比較）
var_dump($a === $b); // false（型も比較するため不一致）

?>