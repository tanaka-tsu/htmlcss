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
  $tax = 10%;
  $price1 = 100;
  $price1_with_tax = $price1 * (1 + TAX);
  $price2 = 200;
  $price2_with_tax = $price2 * (1 + TAX);
  $tax_1 = intval($tax);
  $num_1 = intval($price1);
  $num_2 = intval($price2);
  $num_1_with_tax = intval($price1_with_tax);
  $num_2_with_tax = intval($price2_with_tax);
  ?>
  <p>現在、消費税は<?= $tax_1; ?>％です。</p>
  <p>鉛筆が<?= $num_1; ?>円で税込み<?= $num_1_with_tax; ?>円です。</p>
  <p>消しゴムが<?= $num_2; ?>円で税込み<?= $num_2_with_tax; ?>円です。</p>
</body>
</html>