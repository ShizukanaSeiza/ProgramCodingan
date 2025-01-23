<?php
// Kelas Abstrak Shape
abstract class Shape {
    // Metode Abstrak
    abstract public function getArea();
    abstract public function getPerimeter();

    // Metode Konkret
    public function displayInfo() {
        echo "Area: " . $this->getArea() . "\n";
        echo "Perimeter: " . $this->getPerimeter() . "\n";
    }
}

// Kelas Circle Yang Mengimplementasikan Kelas Abstrak Shape
class Circle extends Shape {
    private $radius;

    public function _construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter() {
        return 2 * pi() * $this->radius;
    }
}

// Kelas Rectangle Yang Mengimplementasikan Kelas Abstrak Shape
class rectangle extends Shape {
    private $length;
    private $width;

    public function _construct($length, $width) {
        $this->length = $length;
        $this->length = $width;
    }

    public function getArea() {
        return $this->length * $this->width;
    }

    public function getPerimeter() {
        return 2 * ($this->length + $this->width);
    }
}

// Membuat Objek Circle
$circle = new Circle(5);
echo "Circle:\n";
$circle->displayInfo();

// Membuat Objek Rectangle
$rectangle = new Rectangle(4, 6);
echo "<br>\nRectangle:\n";
$rectangle->displayInfo();
?>