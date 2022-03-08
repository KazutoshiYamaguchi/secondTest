<?php

if(!empty($_POST)){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $total=$num1+$num2;
}else{
$num1='';
$num2='';
$total=null;
}
?>

<html>
<!-- Emmetで基本構造を展開し<body>要素内に以下を入力 -->
<body>
<h1>計算</h1>
<!-- 以下の数値3箇所に変数出力を行う -->
<h2>2 + 8 = 10</h2>
<form action="" method="post">
  <input type="text" name="num1" size="2" maxlength="2" value='<?=$num1?>'>+
  <input type="text" name="num2" size="2" maxlength="2" value='<?=$num2?>'>=<?=$total?>

  <p><input type="submit" value="計算"></p>
</form>
</body>