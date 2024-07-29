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

        function sort_2way($array,$order) {
            if ($order == TRUE) {
                
                sort($array);
                echo  "昇順にソートします。" .'<br>';
                foreach ($array as $sort_num) {
                
                echo $sort_num. '<br>';
                }
            } else {
                rsort($array);
                echo  "降順にソートします。" .'<br>';
                foreach ($array as $sort_num) {
                
                echo $sort_num. '<br>';
                }
            }                     
        }    
        
        // 関数の呼び出し
        sort_2way($nums,TRUE);
        sort_2way($nums,FALSE);     
        ?>
    </p>
</body>

</html>
