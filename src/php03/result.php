<?php

require_once('config/status_codes.php');

$answer_code = htmlspecialchars($_POST['answer_code'], ENT_QUOTES);
$option = htmlspecialchars($_POST['option'], ENT_QUOTES);

if (!$option) {//データが正しく送信されなかった時の処理
  header('Location: index.php');//選択肢を選ばなかったりどこかでミスった時に迷子にならないようにすること（リダイレクト）
}

foreach ($status_codes as $status_code) {
  if ($status_code['code'] === $answer_code) {
    $code = $status_code['code'];
    $description = $status_code['description'];
  }
}
$result = $option === $code;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>
<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Status Code Quiz
      </a>
    </div>
   </header>
  <main>
    <div class="result__content"><!--ヘッダー下の枠組み-->
        <div class="result"><!--正解不正解の枠-->
          <?php if ($result): ?>
          <h2 class="result__text--correct">正解</h2>
          <?php else: ?>
          <h2 class="result__text--incorrect">不正解</h2>
          <?php endif; ?>
        </div>
        <div class="answer-table"><!--説明文の作成の全体枠-->
          <table class="answer-table__inner"><!--テーブルタグの枠-->
            <tr class="answer-table__row">
              <th class="answer-table__header">ステータスコード</th>
              <td class="answer-table__text"><?php echo $code ?></td>
            </tr>
            <tr class="answer-table__row">
              <th class="answer-table__header">説明</th>
              <td class="answer-table__text"><?php echo $description ?></td>
            </tr>
          </table>
        </div>

    </div>
  </main>
</body>
</html>