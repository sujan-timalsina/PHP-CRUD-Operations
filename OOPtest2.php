<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example 2</title>
</head>
<body>

    <?php
        class Car{

            // Access Modifiers
            // Properties and methods can have access modifiers which control where they can be accessed.
            //public $name;
            //protected $name;
            
            private $name;
            public $color;

            //Advantage of using private:
            //1.restricts in accessing, only method or function in same class can access
            //If went want to access this property then we should use get and set method and link it using this keyword and parameter of that method can be accessed outside using it as an arguments  

            //PHP will automatically call this function when you create an object from a class.
            final function __construct($n){
                $this->name=$n;
            }

            function get_name() {
                return $this->name;
            }

            protected function set_color($n) { // a protected function
                $this->color = $n;
            }

            //a __construct() function that is automatically called when you create an object from a class, and a __destruct() function that is automatically called at the end of the script
            //constructors and destructors helps reducing the amount of code
            function __destruct() {
                echo "The Car is {$this->name}.<br>";
            }
        }

        $buggati = new Car("Buggati");
        // echo $buggati->get_name();

        //$buggati->name="Honda"; Gives Error due to public access modifier

        //$buggati->set_color("black"); Gives Error due to use of protected in function

        // public - the property or method can be accessed from everywhere. This is default
        // protected - the property or method can be accessed within the class and by classes derived from that class
        // private - the property or method can ONLY be accessed within the class


        class BMW extends Car{

            //overriding
            // function __construct($n){
            //     $this->name=$n;
            // }
            //but final keyword is used in __construct() function in parent child so we cannot override

            function nitro(){
                echo "Car go vroom vroom";
            }
        }

        $bmw1=new BMW("BMW");
        $bmw1->nitro();
        echo "<br>";

        //Inheritance in OOP = When a class derives from another class.
        //The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
        //An inherited class is defined by using the extends keyword.

        //PHP doesnot support multiple inheritance, we use interface to solve that drawback

    ?>
    
</body>
</html>