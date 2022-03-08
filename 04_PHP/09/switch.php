<?php
$item='strowberry';

if(!empty($_POST)){
    $item=$_POST['item'];
};
?>

<html>
<body>
  <!-- 初回訪問時は結果を非表示 -->
  <p><?=$item?>が選択されました。</p>
  <form action="" method="post">
    <p>
      <select name="item">
        <option <?php switch($item) {case 'kiwi': echo 'selected';break;}?> value='kiwi'>kiwi</option>
        <option  <?php switch($item) {case 'strowberry': echo 'selected';break;}?> value='strowberry'>strowberry</option>
        <option  <?php switch($item) {case 'watermelon': echo 'selected';break;}?>  value='watermelon'>watermelon</option>
      </select>
    </p>
    <p><input type="submit" value="送信"></p>
  </form>
</body>
</html>