<?php
$fruits = ['リンゴ', 'バナナ', 'ぶどう'];
$fruits[1]='イチゴ';
$fruits[2]='メロン';
unset($fruits[0]);

echo var_dump($fruits).'<br>';
echo print_r($fruits).'<br>';

$arrayList = [
    'リンゴ' => 100,
    'バナナ' => 200,
    'ぶどう' => 300
  ];

  $arrayList['いちご']=400;
  $arrayList['リンゴ']=80;

  echo print_r($arrayList).'<br>';
