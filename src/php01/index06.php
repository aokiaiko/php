<?php
//１ずつ増やす
for ($i = 0; $i <4; $i++) {
  echo $i;
}
echo "<br/>";
echo "<br/>";


//2ずつ増やす
for ($i = 1; $i <=5; $i++) {
  echo $i*2 . '<br />';
}
echo "<br/>";


//while文
$i = 0;

while ($i < 3) {
  echo "i = " . $i . "<br />";
  $i +=1;
}
echo "<br/>";


//while文　例題
$count = 0;

while ($count <20) {
  echo $count  ."<br/>";
  $count +=1;
}


//breakの使い方
$i = 0;
while ($i < 10) {
  if ($i == 5) {
    break;
    // $iが5の時、ループから抜ける。
  }
  echo $i;
  $i++;
}
echo "<br/>";

//continueの使い方
$i = 0;
while ($i < 10) {
  if ($i == 5) {
    $i++;
    continue;
    // $iが5の時、$iに1を足す処理をし、スキップをする。
  }
  echo $i;
  $i++;
}
echo "<br/>";


$count = 0;
while ($count <=100) {
  if($count ==6 . 9 . 12 . 15 . 18){
    $count ++;
    continue;
  }if($count ==20){
  }  break;
  echo $count . "<br/>";
  $count ++;
}


$count = 0;
echo $count;
while ($count <= 100) {//ループを「１００までとし２０で終わるようにする
  if ($count === 20) {
    break;
  }
  if ($count % 3 === 0) {//但し３の倍数でスキップする
    $count+=1;
    continue;
  }
  echo $count . '<br />';
  $count+=1;
}
echo "<br/>";


//do whileの使い方
$i = 0;
do {
  echo $i . '<br />';
  $i++;
} while ($i < 5);
echo "<br/>";

$num = 0;
do{
  echo "num = ". $num . "<br/>";
  $num ++;
}while ($num <3);
echo "<br/>";

$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
  if ($i % 15 == 0) {
    echo $FizzBuzz;
  } else if ($i % 3 == 0) {
    echo $Fizz;
  } else if ($i % 5 == 0) {
    echo $Buzz;
  } else {
    echo $i;
  }
}
echo "<br/>";

$count = 0;

while($count <=100){
  if($count == 20){  // ==基本２つでも良い。厳密な数値型の時は　===
    break;
  }
  if($count % 3 == 0){
    $count ++; //増減式の後にcontinueとしないと表示されない
    continue;
  }
  echo $count . "<br/>";
  $count ++;
}

$i = "●";
for($i = 1; $i <=5; $i++){ 
  //$iを外側とし、それが１回繰り返される毎に内側の＄jが５回繰り返される
  for($j =1; $j <=5; $j++){
    echo "●";
  }
  echo  "<br/>";
}

