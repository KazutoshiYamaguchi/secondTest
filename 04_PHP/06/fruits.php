<?php
$fruits = ['リンゴ', 'バナナ', 'ぶどう'];
echo $fruits[0].$fruits[1].$fruits[2].'<br>';
echo var_dump($fruits).'<br>';
echo print_r($fruits).'<br>';

$fruits = print_r($fruits, true);
echo $fruits.'<br>';
unset($fruits);
echo $fruits[2];

?>