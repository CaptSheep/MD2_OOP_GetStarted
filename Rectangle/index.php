<?php
class Rectangle{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
public function getArea(){
        return $this->width * $this->height;
}
public function getPerimeter(){
        return ($this->width + $this->height) * 2 ;
}
public function display(){
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
}
}
$width = 10;
$height = 20;
$rectangle = new Rectangle($width,$height);

echo " Chieu dai cua hinh chu nhat la : " .  $rectangle->width;
echo "<br>";
echo " Chieu rong cua hinh chu nhat la :" . $rectangle->height;
echo "<br>";
echo " Dien tich cua hinh chu nhat la : " . $rectangle->width . ' * '. $rectangle->height . " = " . $rectangle->getArea();
echo "<br>";
echo " Chu vi cua hinh chu nhat la : " . " ( ". $rectangle->width . ' + '. $rectangle->height . " )" . " * " . " 2" . " = " . $rectangle->getPerimeter();
echo "<br>";
echo "So lieu cua hinh chu nhat la : " . $rectangle->display();
