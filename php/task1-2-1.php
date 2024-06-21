<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
    define("TAX", 0.1);
  ?>
  <?php
    $tax = 10;
    $price1 = 100;
    $price1_with_tax = $price1 * (1 + TAX);
    $price2 = 200;
    $price2_with_tax = $price2 * (1 + TAX);
  ?>
  <p>現在、消費税は<?= $tax; ?>％です。</p>
  <p>鉛筆が<?= $price1; ?>円で税込み<?= $price1_with_tax; ?>円です。</p>
  <p>消しゴムが<?= $price2; ?>円で税込み<?= $price2_with_tax; ?>円です。</p>
</body>
</html>
