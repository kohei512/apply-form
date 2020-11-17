<?php
$my_name = $_POST['my_name'];
$item = $_POST['item'];
$number = $_POST['number'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>フォームからの結果を受け取ろう!!</title>
</head>
<body>
    <p>お名前：<?php echo $my_name; ?></p>
    <p>ご希望商品：<?php echo $item; ?>賞</p>
    <p>個数：<?php echo $number; ?></p>
</body>
</html>