<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>課題016</title>
</head>

<body>
    <p>
    <?php
        // クラスを定義する
        class Food {
            // プロパティを定義する
            private $name;
            private $price;

            // メソッドを定義する
            public function __construct($name, $price) {
                $this->name = $name;
                $this->price = $price;
            }

      
        }

        // クラスを定義する
        class Animal {
            // プロパティを定義する
            private $name;
            private $height;
            private $weight;

            // メソッドを定義する
            public function __construct(string $name,int $height,int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        // インスタンス化する
        $show_price = new Food('poteto', 250);
        $show_height = new Animal('dog', 60, 5000);


        // プロパティにアクセスし、値を出力する
        print_r($show_price);
        echo '<br>';
        print_r($show_height);

        ?>
    </p>
</body>

</html>