<?php
function searchCityTime($city_name)//呼び出しの関数は別ファイルとした方がコーディングのボリュームが減り扱いやすくなる
{
require('config/cities.php');

foreach ($cities as $city) {//cities配列のcityという要素だけ繰返す
  if ($city['name'] === $city_name) {//国名が一致した時に時間を取得する処理をする
   $date_time = new DateTime('', new DateTimeZone($city["time_zone"])); //（）に何も入れない時は現在時刻が表示
   //各国の時刻を表示する為、datetimezomeを利用
   $time = $date_time->format('H:i');
   $city['time'] = $time;//配列の追加？//国の時間も表示するよ

   return $city;//結果はそれぞれのcityに返されるよ
  }
}
}