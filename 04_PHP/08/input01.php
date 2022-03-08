<html>
<!-- Emmetで基本構造を展開し<body>要素内に以下を入力 -->
<form action="input02.php" method="post">
  <!-- 隠しフォーム --><input name="id" value="1234">
  <p>ユーザ名：<input type="text" name="user"></p>
  <p>パスワード：<input type="password" name='pass'></p>
  <p>性別：
  <input type="radio" name='gender' value='男'  checked>男
  <input type="radio" name='gender' value='女'>女
  </p>
  <p><input type="submit" value="送信"></p>
</form>