<?php
$goods1['name'] = '和風柄レターセット';
$goods1['price'] = 980;
$goods2['name'] = '毛筆ペン(細字) ';
$goods2['price']=240;
if($_POST['count1']){
    $count1=$_POST['count1'];
    $subTotal1=$count1*$goods1['price'] ;
    
};
if($_POST['count2']){
    $count2=$_POST['count2'];
    $subTotal2=$count2*$goods2['price'] ;
    
};


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
  table {
    border-collapse: collapse;
    width: 600px;
  }
  th,td {
    border: 1px solid #666666;
    padding: 4px;
  }
  th {
    background-color: #dddddd;
  }
</style>
    <title>shopping cart</title>
</head>
<body>
    <h1>shopping cart</h1>
<form action="" method="post">
    <table>
        <tr>
            <th>item name</th>
            <th>price</th>
            <th>num of items</th>
            <th>sum</th>
        </tr>
        <tr>
            <td><?=$goods1['name']?></td>
            <td><?=$goods1['price']?></td>
            <td><input type="text" name='count1' value='<?=$count1?>'></td>
            <td><?=$subTotal1?></td>
        </tr>
        <tr>
            <td><?=$goods2['name']?></td>
            <td><?=$goods2['price']?></td>
            <td><input type="text" name='count2' value='<?=$count2?>'></td>
            <td><?=$subTotal2?></td>
        </tr>
        <tr>
           <th colspan="3">total</th>
           <td><?php  echo $subTotal1+$subTotal2;?></td>
        </tr>
    </table>
    <p><input type="submit" value='update'></p>
    </form>
</body>
</html>