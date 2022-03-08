<?php
$item='banana';

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
        <option <?php if($item==='apple') echo 'selected'?> value='apple'>リンゴ</option>
        <option <?php if($item==='banana') echo 'selected'?>  value='banana'>バナナ</option>
        <option <?php if($item==='grape') echo 'selected'?>  value='grape'>ぶどう</option>
      </select>
    </p>
    <p><input type="submit" value="送信"></p>
  </form>
</body>
</html>