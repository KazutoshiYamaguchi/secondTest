<html>
<!-- Emmetで基本構造を展開し<body>要素内に以下を入力 -->
<form action="result.php" method="get">
  <p>地域:
    <select name="area">
      <option value="吉祥寺" selected>吉祥寺</option>
      <option value="西荻窪">西荻窪</option>
      <option value="武蔵境">武蔵境</option>
    </select>
  </p>
  <p>間取り:
    <input type="radio" name="layout" value="1K" checked>1K
    <input type="radio" name="layout" value="2DK">2DK
    <input type="radio" name="layout" value="3LDK">3LDK
  </p>
  <p><input type="submit" value="送信"></p>
</form>