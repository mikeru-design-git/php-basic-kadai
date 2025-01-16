<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
      function sort_2way(array $array, bool $order): void {
        if ($order) {
            echo "昇順にソートします。<br>";
            sort($array); // 昇順ソート
        } else {
            echo "降順にソートします。<br>";
            rsort($array); // 降順ソート
        }
        
        // ソート結果を1行ずつ表示
        foreach ($array as $value) {
            echo $value . "<br>";
        }
    }
    
    $nums = [15, 4, 18, 23, 10];
    sort_2way($nums, true);  // 昇順ソート
    sort_2way($nums, false); // 降順ソート
    ?>
  </p>
  
</body>
</html>