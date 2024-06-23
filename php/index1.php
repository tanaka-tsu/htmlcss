<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $message = '今日の日付：'. date('Y/m/d');
  ?>
  <?php
  define('TITLE','演算子とは');
  $a = ['田中',100,'OK'];
  ?>
  <h1>Hallo PHP World!</h1>
  <p><?= $message ?></p>
  <p><?= TITLE;?></p>
  <p>
    <?php print_r($a);?><br>
  </p>
</body>
</html>