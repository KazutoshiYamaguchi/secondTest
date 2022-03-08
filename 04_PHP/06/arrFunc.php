<?php
$text = 'PHP　MySQL　Laravel';

echo 'http://example.com?'.http_build_query([0=>'PHP', 1=>'MySQL',2=>'Laravel']).'<br>';


$alph = 'A-B-C';
$arr=['A','B','C'];
array_push($arr,'D');
echo implode(' | ',$arr);
?>
