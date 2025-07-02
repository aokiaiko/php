<?php
$company = htmlspecialchars($_POST['company'], ENT_QUOTES);
//htmlspecialcharsはフォームを利用したセキュリティ攻撃を防ぐ為にエスケープ処理をする関数
print "会社名は" . $company . "ですね";