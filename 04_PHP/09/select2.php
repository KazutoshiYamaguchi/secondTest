<?php
$item='mikan';

if(!empty($_POST)){
    $item=$_POST['item'];
};
?>

<html>
<body>
  <!-- 初回訪問時は結果を非表示 -->
  <p><!--ユーザ選択項目-->が選択されました。</p>
  <form action="" method="post">
    <p>
      <select name="item">
       <option <?php $item='melon'?echo 'selected':null ?> value='melon'>リンゴ</option>
        <option <?php if($item==='banana') echo 'selected'?>  value='mikan'>バナナ</option>
        <option <?php if($item==='grape') echo 'selected'?>  value='mango'>ぶどう</option>
      </select>
    </p>
    <p><input type="submit" value="送信"></p>
  </form>
</body>
</html>