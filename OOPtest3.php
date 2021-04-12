<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // abstract class MyAbstractClass {
        //     abstract function myAbstractFunction() {
        //     }
        //  }

        //An abstract class is one that cannot be instantiated, only inherited
        //We declare abstract classes by abstarct keyword

        class ForStatic{
            static $access="Can be access without instantiated";

            public function get_StaticValue(){
                return self::$access;
            }

            public static function callIt(){
                echo "Welcome<br>";
            }
        }

        //Using value without instantiated with help of static keyword
        echo ForStatic::$access."<br>";

        //We usually donot use instance which have static keyword because it can be accessed without it

        //Using instance of class
        $static = new ForStatic();

        echo $static->get_StaticValue();
        echo "<br>";


        //Declaring class members or methods as static makes them accessible without needing an instantiation of the class.
        //scope resolution operator ::

        //Calling static function directly
        //Syntax, classNAme::StaticFunctionName();

        ForStatic::callIt();

        //the final keyword, which prevents child classes from overriding a method by prefixing the definition with final.

        interface InterfaceName{

            public function interfaceMethod();
            //PHP doesnot support multiple inheritance but we can overcome it by using interface
            //Interfaces allow you to specify what methods a class should implement.

            //Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".

            //Interfaces are declared with the interface keyword:
        }

        //To implement an interface, a class must use the implements keyword.
        //A class that implements an interface must implement all of the interface's methods

        class implements1 implements InterfaceName{

            //Above all method of that is using inside interface must be used here...
            public function interfaceMethod(){

            }

        }

        //PHP only supports single inheritance: a child class can inherit only from one single parent.
        //So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.

        trait Parent1{
            public function msg(){
                echo "Can be implemnented by more than one classes<br>";
            }
        }

        class Child1{

            //we use USE keyword to use trait 
            use Parent1;
        }

        class Child2{

            use Parent1;

            //to use multiple traits
            //use Parent1,Parent2;
        }

        $child1=new Child1();
        $child1->msg();

        $child2=new Child2();
        $child2->msg();

        //Namespaces are qualifiers that solve two different problems
        //1.They allow for better organization by grouping classes that work together to perform a task
        //2.They allow the same name to be used for more than one class

        //A namespace declaration must be the first thing in the PHP file.
        //Syntax, namespace Html;

        //An iterable is any value which can be looped through with a foreach() loop.

        //The iterable pseudo-type was introduced in PHP 7.1, and it can be used as a data type for function arguments and function return values.

        function callAll(array $items){
            foreach($items as $item){
                echo $item;
            }
        }

        callAll([1,2,3,4,9,5,4]);

        $arr=['Ram','Shyam','Hari'];
        callAll($arr);


        
    ?>
    
</body>
</html>