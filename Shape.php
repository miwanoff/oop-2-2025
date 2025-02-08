<?php

class Shape
{
    protected $x;
    protected $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function move($x = 0, $y = 0)
    {
        echo "Рухаємо фігуру: старі координати $this->x $this->y Нові координати $x $y";
        $this->x = $x;
        $this->y = $y;
    }
}

class RectangleDrawer extends Shape
{
    protected $width;
    protected $height;

    public function __construct($x, $y, $width, $height)
    {
        parent::__construct($x, $y);
        $this->width  = $width;
        $this->height = $height;
    }

    public function draw()
    {
        echo "Малюємо прямокутник: параметри: " . $this->x . " " . $this->y . " " . $this->width . " " . $this->height . "\n";
    }
}
class CircleDrawer extends Shape
{
    protected $radius;

    public function __construct($x, $y, $radius)
    {
        parent::__construct($x, $y);
        $this->radius = $radius;

    }

    public function draw()
    {
        echo "Малюємо коло: параметри: " . $this->x . " " . $this->y . " " . $this->radius . "\n";
    }
}

$rect1   = new RectangleDrawer(1, 2, 3, 4);
$rect2   = new RectangleDrawer(5, 6, 7, 8);
$circle3 = new CircleDrawer(15, 16, 3);
$circle4 = new CircleDrawer(25, 26, 6);
$shapes  = [$rect1, $rect2, $circle3, $circle4];

foreach ($shapes as $shape) {
    echo $shape->draw();
    $shape->move();
    echo $shape->draw();
}