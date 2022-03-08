<?php
$d1= new DateTime();
$d1->modify('last day of February 2025');
echo $d1->format('Y-m-d').'の方が「１０日分」';
$d1->modify('-10 days');
echo $d1->format('Y-m-d').'より新しいです。';

