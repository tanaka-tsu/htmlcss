<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
  <table>
    <tr>
      <th>商品</th>
      <th>価格</th>
      <th>税込み価格</th>
      </tr>
    <?php
       $a = [
        ['name' => '鉛筆', 'price1' => '100円', 'price2' => '110円'],
        ['name' => '消しゴム', 'price1' => '200円', 'price2' => '220円'],
        ['name' => '定規', 'price1' => '300円', 'price2' => '330円']
      ];
      foreach ($a as $b) {
        echo "<tr>\n";
        echo '<td>' . $b['name'] . "</td>\n";
        echo '<td>' . $b['price1'] . "</td>\n";
        echo '<td>' . $b['price2'] . "</td>\n";
        echo "</tr>\n";
    }
    ?>
  </table>
</body>
</html>