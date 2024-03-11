<?php

abstract class Shape
{
  protected $name;

  // In order to have abstract functions within your class, you MUST declare your class as an abstract class
  abstract public function calculateArea();

  public function __construct($name)
  {
    $this->name = $name;
  }

  // Concrete method
  public function getName()
  {
    return $this->name;
  }
}

class Circle extends Shape
{
  private $radius;

  public function __construct($name, $radius)
  {
    $this->radius = $radius;
  }

  public function calculateArea()
  {
    return 'The area is equal to: ' . round(pi() * pow($this->radius, 2));
  }
}

class Rectangle extends Shape
{
  private $width;
  private $height;

  public function __construct($name, $width, $height)
  {
    $this->width = $width;
    $this->height = $height;
  }

  public function calculateArea()
  {
    return 'The area is equal to: ' . $this->width * $this->height;
  }
}

$circle = new Circle('Circle', 5);
// var_dump($circle);
echo '<br>';
echo $circle->calculateArea();
echo '<br>';
echo '<br>';

$rectangle = new Rectangle('Rectangle', 3, 6);
// var_dump($rectangle);
echo '<br>';
echo $rectangle->calculateArea();
echo '<br>';


// In PHP, abstract classes are used to provide a blueprint for other classes to inherit from. You would typically use an abstract class in the following situations:

  // When you want to define a common interface
  // When you want to enforce a structure
  // When you want to restrict instantiation
  // When you want to provide default implementations