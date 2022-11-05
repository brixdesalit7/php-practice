<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    // create a class using class keyword
    class FruitColor {

    // declare a property $fruitcolor
    // the private keyword is access modifiers
    // private means the method or a propety is only accessible within a class
    private $fruitcolor;

    // the use of __construct function is to initialize property
    function __construct($fruitcolor) {
        //the this keyword calling a object where the property belong
        $this->fruitcolor = $fruitcolor;
    }

    // method in a class 
    // pass a parameter $color 
    public function getFruits($color) {
        // assign empty array to $fruits variable
        $fruits = array();
        // check if $fruitcolor is set using isset function
        if (isset($this->fruitcolor[$color])) {
            // assign value of $fruitscolor to $fruits variable
            $fruits = $this->fruitcolor[$color];
        }
        // encode associative array into JSON object using json_encode();
        return json_encode(array("color" => $color, "fruits" => $fruits));
    }
    }
    $fruitcolor = new FruitColor(
        array(
            "red" => array("strawberry","apple"),
            "yellow" => array("mango","ripe")
        )
        );

    echo $fruitcolor->getFruits("red");
    echo "\n";
    echo $fruitcolor->getFruits("yellow");
    ?>
</body>
</html>