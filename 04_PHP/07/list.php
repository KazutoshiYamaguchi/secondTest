<?php
$goods=['テレビ','パソコン','携帯電話','冷蔵庫','洗濯機'];
$itemName=$goods[$_GET['id']];

?>
<p><?=$itemName?>が選択されました。</p>
<a href="goods.php">一覧ページへ戻る</a>