<?php
require('util.inc.php');

$typedSeireki='';
$wareki='';
if(!empty($_POST)){
    $typedSeireki=$_POST['seireki'];
    $wareki=h('西暦'.$typedSeireki.'は'.getWareki($typedSeireki).'です');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>西暦⇒和暦変換</title>
</head>
<body>
    <h1>西暦⇒和暦変換</h1>
    <p>key in 'seireki' to calculate</p>
    <form action="" method="post">
        seireki:
        <input type="text" maxlength="4" name='seireki' value='<?=$typedSeireki?>' >
        <p><input type="submit" value='calculate' ></p>
    </form>
    <?php  if(!empty($_POST)):?>
        <p><?=$wareki;?></p>
        <?php  endif;?>
</body>
</html>