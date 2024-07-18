<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
    function showString($str = '気合いだ！', $num = 3) {
      for ($i = 0; $i < $num;) {
          echo $str . "<br>";
          $i++;
      }
    }
    showString();
  ?>
</body>
</html>