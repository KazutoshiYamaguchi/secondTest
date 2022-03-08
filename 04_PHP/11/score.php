<?php

$result='';

if(!empty($_POST)){
    $score = $_POST['score'];
    $result=getScoreResult($score);
}

/**
 * スコアを引数に指定すると判定結果を返す
 */
function getScoreResult($score){
  if(!is_numeric($score)){
    $result ='数値を入力してください';
}else{
    if($score>100 || $score<0){
        $result = '不正な点数です';
    }else{
    
        if ($score === 100) {
            $result = '満点おめでとう！';
          }elseif($score>=80){
            $result = '素晴らしいです';
          }elseif($score>=60){
            $result = '合格です';
          }else{
            $result = '不合格です';
          };
        };
    
}
return $result;
}


?>

<html>
  <!-- Emmetで基本構造を展開し<body>要素内に以下を入力 -->
  <h1>テスト結果判定</h1><!-- <title>内も同様 -->
  <form action='' method='post'>
    <p>点数：
      <input type="text" name="score" size="3" maxlength="3">点
      <input type="submit" value="判定">
    </p>
    <p>判定：<?php echo $result?></p>
  </form>
  
</html>

