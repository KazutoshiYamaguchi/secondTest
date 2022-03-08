<?php


$Arr=[
    [30	,65	,72,47,	63,	96],
    [35	,57,67,	23,	14,	56,	61],
    [46,16,	27,	58],
    [84	,27	,40,18,	92,	46,	21],
    [14	,74	,54,2,85]
];
$result='';
$total=null;

$numArr=3;

if(!empty($_POST)){
    $numArr=$_POST['arr'];
    $num=$_POST['num'];

    if($num===''){
        $result='数値を入力してください';
    }elseif($num>99 || $num<1){
        $result='1~99までの数値を入力してください';
    }else{
        foreach($Arr[$numArr] as $number){
$total+=$number;
        };
        
       $result='合計結果: '.$total*$num ; 
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>合計値の計算</title>

    <style>
  table {
    border-collapse: collapse;
    width: 800px;
  }
  th,td {
    border: 1px solid #999;
    padding: 15px;
    text-align: center;
  }
  th {
    background-color: #eee;
  }
  .error {
    font-size: 80%;
    color: #900;
  }
  .error::before {
    content: "※ ";
  }
</style>
</head>
<body>
    <h1>合計値の計算</h1>
    <form action="" method='post'>
        <p>
            select arr:
            <select name="arr">
                <option <?php if($numArr===0) echo 'selected'?> value=0>配列１</option>
                <option <?php if($numArr===1) echo 'selected'?>  value=1>配列２</option>
                <option <?php if($numArr===2) echo 'selected'?>  value=2>配列３</option>
                <option <?php if($numArr===3) echo 'selected'?>  value=3>配列４</option>
                <option <?php if($numArr===4) echo 'selected'?>  value=4>配列５</option>
            </select>
        </p>
        <p>
            num you multiply:
            <input type="text" name="num" size=2 maxlength=2 value='<?php if($num)echo $num?>'>
        </p>
        <input type="submit" value='計算'>
    </form>
    <?php if($result):?>
        <p><?=$result?></p>
        <?php endif;?>


        <?php if (isset($error)): ?>
  <p class="error">error arising</p>
<?php elseif ($total): ?>
    <table>
                <tr>
                    <th>配列<?=$numArr+1?></th>
                    <?php for($i=0;count($Arr[$numArr])>$i; $i++):?>
                    <td><?=$Arr[$numArr][$i]?></td>
                    <?php endfor;?>
                    <th>total <?=$total?></th>
                    <th>* <?=$num?> =</th>
                    <th>total <?=$total*$num?></th>
                </tr>   
            </table>
<?php endif; ?>
        
</body>
</html>