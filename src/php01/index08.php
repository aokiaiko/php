<?php
$array = ['Taro','Jiro', 'Saburo'];//配列

var_dump($array);
echo $array[1];
echo "<br/>";


//連想配列 添字に文字列をくっつけたもの
$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

var_dump($people);
echo "<br/>";


//別の方法
$people = [
  'person1' => 'taro',
  'person2' => 'jiro',
];
echo $people['person1'] . "<br/>";



//多次元配列
$people = [
  [
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "男性"
  ],
  [
    "last_name" => "鈴木",
    "first_name" => "次郎",
    "age" => 25,
    "gender" => "男性"
  ],
  [
    "last_name" => "佐藤",
    "first_name" => "花子",
    "age" => 20,
    "gender" => "女性"
  ]
];                 
echo  $people[2]["last_name"] . "<br/>";   



//foreach文
$people = array('Taro', 'Jiro', 'Saburo');

foreach ($people as $person)  {  //$peopleに入っているようそを$personに代入。なぜ代入したにとダメ？
  echo $person;
  echo '<br />';
}



$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

foreach ($people as $person => $name) {
  print $person . "は" . $name . "です" . '<br />';
}



//foreachを使って多次元配列
$people = [
  [
    "first_name" =>"Taro",
    "age" =>"25才",
    "gender" =>"men"
  ],
  [
    "first_name" =>"Jiro",
    "age" =>"20才",
    "gender" =>"men"
  ],
  [
    "first_name" =>"hanako",
    "age" =>"16才",
    "gender" =>"women"
  ]
];

foreach ($people as $person ){
}

echo $person[0]["first_name"]["age"]["gender"]."<br/>";



//解答
$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $people [0] . '(' . $people [1] . '歳' . $people [2] . ')'. '<br />';
}