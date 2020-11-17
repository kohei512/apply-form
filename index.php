<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>フォームを作成してみよう!!</title>
</head>
<body>
    <form action="result.php" method="post">
        お名前：<input type="text" name="my_name" >
        <br>
        ご希望商品：  <input type="radio" name="item" value="A">A賞
        <input type="radio" name="item" value="B">B賞
        <input type="radio" name="item" value="C">C賞
        <br>
        個数：   <select name="number">
                  <?php for($i = 1; $i <= 10; $i ++): ?>
                    <option value="<?php echo $i; ?>">
                      <?php echo $i; ?>
                    </option>
                  <?php endfor; ?>
                </select>
        <br>
        <input type="submit" value="申込" >
    </form>
</body>
</html>