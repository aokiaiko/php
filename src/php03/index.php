<?php

require_once('config/status_codes.php');

$random_numbers = array_rand($status_codes, 4);//status_codesがキーとなる
//ランダムナンバーズに取り出したキーが格納される
//これだけだと値がそれぞれの数でしか表されない　int(3)とか
//中の値を取得する為に新たに配列を作る必要がある

foreach ($random_numbers as $index) {//ランダムナンバーの配列のindexの数だけ処理を行う
$options[]= $status_codes[$index];//これは選択肢一つ分の配列
}
//indexが引数となりステータスコードに渡される為に、中身をゲット出来る。

$question = $options[array_rand($options,1)];

echo('<pre>');
var_dump($question);
echo('</pre>');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Status Code Quiz</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <header class="header">
      <div class="header__inner">
        <a class="header__logo" href="/php03">
          Status Code Quiz
        </a>
      </div>
  </header>

  <main>
     <div class="quiz__content">
       <div class="question">
         <p class="question__text">Q. 以下の内容に当てはまるステータスコードを選んでください</p>
         <p class="question__text">
          <?php echo $question['description'] ?>
         </p>

       </div>
       <form class="quiz-form" action="result.php" method="post">
         <input type="hidden" name="answer_code" value="<?php echo $question['code'] ?>">
         
         <div class="quiz-form__item">
           <?php foreach ($options as $option): ?>
           <div class="quiz-form__group">
             <input class="quiz-form__radio" 
             id="<?php echo $option['code'] ?>" 
             type="radio" name="option" 
             value="<?php echo $option['code'] ?>">
             <label class="quiz-form__label" 
             for="<?php echo $option['code'] ?>">
             <?php echo $option['code'] ?>  
             </label>
           </div>
           <?php endforeach; ?>
         </div>
         
         <div class="quiz-form__button">
           <button class="quiz-form__button-submit" type="submit">
             回答
           </button>
         </div>
        </form>
      </div>
   </main>
</body>
</html>