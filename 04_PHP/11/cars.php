<?php
require('util.inc.php');
$cars=[
    [
        'maker'=>'トヨタ',
        'model'=>'プリウス',
        'price'=>1100000,
        'year'=>2004,
        
        
    ],
    [
        'maker'=>'ホンダ',
        'model'=>'アコード',
        'price'=>2200000,
        'year'=>2009,
        
    ],
    [
        'maker'=>'日産',
        'model'=>'マーチ',
        'price'=>580000,
        'year'=>2003,
    ],
    [
        'maker'=>'ポルシェ',
        'model'=>'ボクスター',
        'price'=>4500000,
        'year'=>2008,
        
    ],
    [
        'maker'=>'BMW',
        'model'=>'Z8',
        'price'=>12500000,
        'year'=>2002,
        
    ]

    ];
    
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>車種一覧</title>
    <style>
  table {
    border-collapse: collapse;
    width: 800px;
  }
  tr:nth-of-type(even) {
    background-color: #f6f6f6;
	}
  th, td {
    border: 1px solid #999;
    padding: 15px;
    text-align: center;
  }
  th {
    background-color: #eee;
  }
  td:last-child {
    text-align: right;
  }
</style>
</head>
<body>
    <h1>車種一覧</h1>
    <table>
        <tr>
        <th>maker</th>
        <th>model</th>
        <th>year</th>
        <th>price</th>
        
        </tr>
        <?php foreach($cars as $car):?>
        <tr>
        <td><?=$car['maker']?></td>
        <td><?=$car['model']?></td>
        <td><?=$car['year'].'年'.'('.getWareki($car['year']).')';?></td>
        <td><?=number_format($car['price']).'円'?></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>