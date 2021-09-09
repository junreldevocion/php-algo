<?php

// abstraction is the interface
interface shape {
    public function area();
}

// lower level module is the class that implements the interface
class Square implements shape {
    public $height;
    public $width;

    public function __construct($height = 0, $width=0) {
        $this->height = $height;
        $this->width = $width;
    }

    public function area() {
        return $this->height * $this->width;
    }
}

class Circle implements Shape {
    public $radius;

    public function __construct($radius = 0) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * ($this->radius * $this->radius);
    }
}

// higher level module accepts the abstraction that does something with it.
class Calculator {

    public function __construct(Shape $shapes) {
        // we don't care how
        // we do care that it can.
        $this->shapes = $shapes;
    }

    public function calculate() {
        $area = [];
        foreach($this->shapes as $shape) {
            $area[] = $this->shapes->area();
        }

        return array_sum($area);
    }
}

$calc = new Calculator(new Circle(3));
print_r($calc->calculate()); die;

// lower level modules implement interface
// higher leve modules accept interface
// both lower and high level modules must depend on the interface (AKA abstraction)