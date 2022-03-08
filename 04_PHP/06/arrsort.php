<?php
$arr      = [10, 20, 5 => 50];
$arr[3]   = 30;
$arr[]    = '10';
$arr[]    = '20';
$arr[5]   = '30';
unset($arr[7]);
$arr['4'] = 10;
// $arr[]    = [...[40]];
//20 20 50 30 null '30' 40
echo print_r($arr)
?>
