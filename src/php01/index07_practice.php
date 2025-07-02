<?php

//BMI

function BMI($weight,$height)
{
    $bmi = $weight / (($height/100)*2);//$bmiをreturnにしたらダメなの?
    if ($bmi  <18.5) {
        echo number_format($bmi,2) . "\n" . "肥満度 : 低体重";
    }elseif($bmi >=18.5 &&  $bmi <25.0){
        echo number_format($bmi,2) . "\n" ."肥満度 : 標準体重"; 
    }elseif($bmi >=25.0 && $bmi  <30.0){
        echo number_format($bmi,2) . "\n" . "肥満度 : 肥満（レベル１）";
    }elseif($bmi >=30.0 && $bmi  <35.0){
        echo number_format($bmi,2) . "\n" . "肥満度 : 肥満（レベル２）";
    }elseif($bmi  >=35.0 && $bmi  <40.0){
        echo number_format($bmi,2) . "\n" . "肥満度 : 肥満（レベル3）";
    }elseif($bmi  >=40.0){
        echo number_format($bmi,2) . "\n" . "肥満度 : 肥満（レベル４）";
    }//数字も表示させたい時は、echoでそれぞれ記述しないといけないが、肥満度：低体重だけの結果でよければ
    //最後のelseif.echo}の後にreturn number_format($bmi,2)を入れれば各行がすっきりする
}

 BMI(50,165)  ;
echo "<br/>";


//テストの平均点
function exam($score1, $score2, $score3,$score4, $score5, $score6,$score7, $score8, $score9,$score10)
{  //上記（）の中が引数
  $total = $score1+$score2+$score3+$score4+$score5+$score6+$score7+$score8+ $score9+$score10;
  echo "合計点：" . "$total" . "<br/>";
  $average = $total / 10;
  echo "平均点：" . "$average";
}
 exam(80, 60, 90,70,80,90,100,90,50,70);

//戻り値があるがreturnは必要？　→examで呼び出せせている為echo必要なし
// echoは文字列を出力する時に必要だが、関数を呼び出す時は無くて良い

//echo exam(80, 60, 90,70,80,90,100,90,50,70);　echoを除いても表示された。あるなしの違いは？