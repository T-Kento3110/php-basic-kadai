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
            public function set_food(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            public function show_food() {
                echo $this->price . '<br>';
            }   
            
            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
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
            public function set_animal(string $name,int $height,int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        
            public function show_animal() {
                echo $this->height . '<br>';
            }   

            // コンストラクタを定義する
            public function __construct(string $name,int $height,int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        // インスタンス化する
        $show_price = new Food('poteto',250);
        $show_height = new Animal('dog', 60, 5000);
        
        // 出力する
        print_r($show_price);
        echo '<br>';
        print_r($show_height);
        echo '<br>';
        $show_price->show_food();
        $show_height->show_animal();
 
  
 

        ?>
    </p>
</body>

</html>