<!-- PHP OOP - Inheritance -->

<!-- *********************************************11111*********************************************************** -->
<!DOCTYPE html>
<html>
<body>

<?php

// class Fruit {
//   public $name;
//   public $color;
//   public function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color; 
//   }
//   public function intro() {
//     echo "The fruit is {$this->name} and the color is {$this->color}."; 
//   }
// }

// // Strawberry is inherited from Fruit
// class Strawberry extends Fruit {
//   public function message() {
//     echo "Am I a fruit or a berry? "; 
//   }
// }

// $strawberry = new Strawberry("Strawberry", "red");
// $strawberry->message();
// $strawberry->intro();
?>
 
</body>
</html>
<!-- *********************************************22222*********************************************************** -->


<!DOCTYPE html>
<html>
<body>

<?php
// class Fruit {
//   public $name;
//   public $color;
//   public function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color; 
//   }
//   protected function intro() {
//     echo "The fruit is {$this->name} and the color is {$this->color}."; 
//   }
// }
// // Strawberry is inherited from Fruit
// class Strawberry extends Fruit {
//   public function message() {
//     echo "Am I a fruit or a berry? "; 
//   }
// }

// // Try to call all three methods from outside class
// $strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
// $strawberry->message(); // OK. message() is public
// $strawberry->intro(); // ERROR. intro() is protected
?>
 
</body>
</html>
<!-- *********************************************33333*********************************************************** -->
<!DOCTYPE html>
<html>
<body>

<?php
// class Fruit {
//   public $name;
//   public $color;
//   public function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color; 
//   }
//   protected function intro() {
//     echo "The fruit is {$this->name} and the color is {$this->color}."; 
//   }
// }

// // Strawberry is inherited from Fruit
// class Strawberry extends Fruit {
//   public function message() {
//     echo "Am I a fruit or a berry? ";
//     // Call protected function from within derived class - OK 
//     $this -> intro();
//   }
// }
// $strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
// $strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
?>
 
</body>
</html>

<!-- *********************************************Overriding Inherited Methods*********************************************************** -->

<!-- *********************************************4444444*********************************************************** -->

<!DOCTYPE html>
<html>
<body>

<?php
// class Fruit {
//   public $name;
//   public $color;
//   public function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color; 
//   }
//   public function intro() {
//     echo "The fruit is {$this->name} and the color is {$this->color}."; 
//   }
// }

// class Strawberry extends Fruit {
//   public $weight;
//   public function __construct($name, $color, $weight) {
//     $this->name = $name;
//     $this->color = $color;
//     $this->weight = $weight; 
//   }
//   public function intro() {
//     echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram."; 
//   }
// }

// $strawberry = new Strawberry("Strawberry", "red", 50);
// $strawberry->intro();
?>
 
</body>
</html>

<!-- ********************************************* The final Keyword*********************************************************** -->

<!-- *********************************************555555555*********************************************************** -->
<!DOCTYPE html>
<html>
<body>

<?php

// final class Fruit {
// }

// class Strawberry extends Fruit {
// }

?>
 
</body>
</html>
<!-- *********************************************6666666*********************************************************** -->
<!DOCTYPE html>
<html>
<body>

<?php
// class Fruit {
//   final public function intro() {
//   }
// }

// class Strawberry extends Fruit {
//   // will result in error
//   public function intro() {
//   }
// }
?>
 
</body>
</html>