<?php
//引数と戻り値あり
function outputNumber($a)
{
  echo "引数の値は" . $a . "です";
  return;
}

outputNumber(2);
echo "<br/>";



//引数と戻り値なし
function outputHello()
{
  echo "Hello world";
}

outputHello(); // ①
echo "<br/>";


//引数と戻り値あり
function text($number1, $number2)
{
  return $number1 + $number2;
}

$total =text(1, 4);
echo $total . "<br/>"; 

function addNumber($a, $b)
{
  $add = $a + $b;
  return $add;
}

$total = addNumber(2, 3);
print $total;
//echoは . で区切って複数の文字を繋げることができる
//printの文字表示は１つのみ
echo "<br/>";


//試験問題
function exam($score1, $score2, $score3)
{
  $total = $score1 + $score2 + $score3;
  if ($total > 210) {
    echo $total . "点なので合格です";
  } else {
    echo $total . "点なので不合格です";
  }
}
echo (exam(80, 60, 90));
echo "<br/>";




function triangle_area($base,$hight)
{
  return $base * $hight / 2 ;
}
echo triangle_area(2,3);

function square_area($width,$hight)
{
  return $width * $hight ;
}
echo square_area(2,3) . "\n";

function trapezoid_area($topside,$bottomside,$hight)
{
  return ($topside + $bottomside) * $hight / 2 ;
}
echo trapezoid_area(2,3,6);
echo "<br/>";



function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";//"\n"はスペース開ける
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);