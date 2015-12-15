<?php

abstract class Shape{

	protected $color;

	public function __construct($color = 'red'){

	$this->color = $color;

}

	public function getColor()
	{
		return $this->color;
	}

	abstract public function getArea();

}

class Square extends Shape{

	protected $length = 4;

	function getArea()
	{
		return pow($this->length, 2);
	}

}

class Triangle extends Shape{

	protected $base = 4;
	protected $height = 7;

	// this function getArea() in the child class(Triangle) overrides the same function 
	// that's being inherited from the parent class(Shape)

	function getArea()
	{
		return .5 * $this->base * $this->height;
	}


}

class Circle extends Shape{
	protected $radius = 5;

	public function getArea()
	{
		return M_PI * pow($this->radius, 2);
	}

}
// echo (new Square('green'))->getColor();
// $circle = new Circle;
// echo $circle->getArea();
(new Circle)->getArea();