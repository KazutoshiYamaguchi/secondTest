<?php
$goods['name'] = '和風柄レターセット';
$goods['price'] = 980;
if($_POST['count']){
    $count=$_POST['count'];
};

if($_POST['count']){
    $total=$_POST['count']*$goods['price'] ;
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
            <td><?=$goods['name']?></td>
            <td><?=$goods['price']?></td>
            <td><input type="text" name='count' value='<?=$count?>'></td>
            <td><?=$total?></td>
        </tr>
    </table>
    <p><input type="submit" value='update'></p>
    </form>
</body>
</html>