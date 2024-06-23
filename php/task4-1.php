<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  $a = mt_rand(0,100);
  if ($a >= 95){$judge = "大凶";}
  elseif ($a >= 80){$judge = "凶";}
  elseif ($a >= 50){$judge = "中吉";}
  elseif ($a >= 20){$judge = "大吉";}
  else {$judge = "大吉";}
  ?>
  <h1>今日の運勢は”<?= $judge; ?>”です。</h1>
</body>
</html>