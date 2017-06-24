<?php
/*
  // Example #2: Basic Structure with Example
  
  abstract class Mailer {
    public function send($to, $from, $body)
    {
      # code...
    }
  }

  class UserMailer extends Mailer {
     public function sendWelcomeEmail(User $user)
    {
      return $this->send($user->email)
    }
  }
*/

  // Example #1:
 abstract class Shape
 {
   protected $color;

   public function __construct($color = 'Red')
   {
     $this->color = $color;
   }

   public function getColor()
   {
     return $this->color;
   }

   abstract protected function getArea();
 }

 class Square extends Shape
 {
   protected $length = 4;

   public function getArea()
   {
     return pow($this->length, 2);
   }
 }

 class Triangle extends Shape {
   protected $base = 4;

   protected $height = 7;

   public function getArea()
   {
     return .5 * $this->base * $this->height;
   }
 }

 class Circle extends Shape {
   protected $radius = 5;

   public function getArea()
   {
     return M_PI *pow($this->radius, 2);
   }
 }

 $circle = new Circle;
 echo "The Color of Circle: " . $circle->getColor() . ",</br>";    // The Color of Circle: Red,
 echo "\nThe Area of Circle: " . $circle->getArea() . ",</br>";    // Output: The Area of Circle: 78.539816339745.

 $triangle = new Triangle('Green');
 echo "The Color of Triangle: " . $triangle->getColor() . ",</br>";    // The Color of Triangle: Green,
 echo "The Area of Triangle: " . $triangle->getArea() . ",</br>";   // Output: The Area of Triangle: 14,

 echo "The Color of Square: " . (new Square('Pink'))->getColor() . ",</br>";    // The Color of Square: Pink,
 echo "The Area of Square: " . (new Square)->getArea() . ".";   // Output: The Area of Square: 16.
