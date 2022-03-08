<?php
$arrNum = [1490, 320, 2160, 1980, 498, 2324, 698, 2218, 1240, 198];

$index=0;
for ($i=0;count($arrNum)>$i;$i++){
    $index = mt_rand(0, array_key_last($arrNum));  
    echo $arrNum[$index]." |";
}

$total=0;
foreach($arrNum as $num){
    $total+=$num;
}

echo number_format($total)."yen";

?>