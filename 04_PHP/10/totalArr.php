<?php
$sum=0;
$priceList = [298, 348, 198, 680, 98, 980, 498, 640];
for($i=0;count($priceList)>$i;$i++){
    $sum+=$priceList[$i];
}

echo $sum*1.1."円".'<br>';
?>