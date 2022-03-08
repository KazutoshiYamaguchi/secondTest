<?php
$id=$_POST['id'];
$name=$_POST['user'];
$pass=$_POST['pass'];
$gender=$_POST['gender']
?>
<html>
<!-- Emmetで基本構造を展開し<body>要素内に以下を入力 -->
<body>
  <h1><?=$name?>さん、こんにちは！</h1>
  <p>あなたのパスワードは「<?=$pass?>」です。</p>
  <p>ID: <?=$id?></p>
  <p>性別: <?=$gender?></p>
  <p><a href="input01.php">フォームに戻る</a></p>
</body>
</html>