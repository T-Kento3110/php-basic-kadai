<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];
        
        sort($nums);

        echo  "昇順にソートします。" .'<br>';
        foreach ($nums as $sort_num) {
        
        echo var_dump ($sort_num). '<br>';
        }
        
        rsort($nums);
        echo  "降順にソートします。" .'<br>';
        foreach ($nums as $sort_num) {
        
        echo var_dump ($sort_num). '<br>';
        }
        
        ?>
    </p>
</body>

</html>
