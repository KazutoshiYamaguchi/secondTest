<?php
$spring='';
$summer='';
$fall='';
$winter='';

if(!empty($_POST)){
$spring=$_POST['spring'];
$summer=$_POST['summer'];
$fall=$_POST['fall'];
$winter=$_POST['winter'];

    require_once dirname(__FILE__) . '/Chart.php';
$data = [$spring, $summer, $fall, $winter];
$label = ['spring', 'summer', 'fall', 'winter'];
$c = new Chart();
$c->setTitle('好きな季節 アンケート結果');
$c->addData($data, 'season');
$c->setXLabel($label);
$c->setXAxisName('季節');
$c->setYAxisName('（人）');
$c->setSize(300, 200);
}


function h($string){
    return htmlspecialchars($string);
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>result</h1>
    <table>
        <form action="" method='post'>
        <p>spring:<input type="text" maxlength="4" name='spring' value='<?=$spring?>'></p>
        <p>summer:<input type="text" maxlength="4" name='summer' value='<?=$summer?>'></p>
        <p>fall:<input type="text" maxlength="4" name='fall' value='<?=$fall?>'></p>
        <p>winter:<input type="text" maxlength="4" name='winter' value='<?=$winter?>'></p>
        <input type="submit" value='create the graph'>
        </form>
    </table>
    <?php if(!empty($_POST)):?>
    <?php $c->printBarChart(); ?>
    <?php endif;?>
</body>
</html>