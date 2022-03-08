
<?php

$birthStones = array(1 => 'ガーネット', 'アメジスト', 'アクアマリン','ダイヤモンド','エメラルド','パール','ルビー','ペリドット','サファイア','オパール','トパーズ','ターコイズ');
if($_POST['stoneName']){
    $month=$_POST['stoneName'];
    $stoneName=$birthStones[$month];
    
}else{
    $month=1;
    $stoneName=$birthStones[$month];
}
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
<h1>birthstone</h1>

<p><?=$month?>月誕生石は<?=$stoneName?>です</p>
<form action="" method='post'>
select a birthstone:
<select name="stoneName">
    <?php foreach($birthStones as $index=>$stone):?>
  <option value="<?php echo $index?>" ><?php echo $index?>月</option>
  <?php endforeach;?>
</select>
<input type="submit" value='send'>
</form>
</body>
</html>