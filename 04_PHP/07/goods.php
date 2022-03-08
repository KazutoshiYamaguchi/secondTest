<?php
$goods=['テレビ','パソコン','携帯電話','冷蔵庫','洗濯機']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>商品の選択</h1>
<ul>
    <?php foreach($goods as $index=> $item):?>
    <li><a href="list.php?id=<?=$index ?>"><?=$item?></a></li>
    <?php endforeach;?>
    
   

</ul>

    
</body>
</html>