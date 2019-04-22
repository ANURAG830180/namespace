<?php
declare(strict_types=1);

trait Calculation
{

    private $length;
    private $breadth;
    private $radius;

    public function Area(float $l, float $b): float
    {

        try {
            $this->length = $l;
            $this->breadth = $b;
            return $this->breadth * $this->length;
        } catch (Exception $e) {
            echo "Messsage".$e->getMessage();
        }
    }
}

trait Circle
{

    private $radius;

    public function circleArea(float $r): float
    {

        try {
            $this->radius = $r;
            return pi() * $r * $r;
        } catch (Exception $e) {
            echo "Messsage".$e->getMessage();        }
    }

}

class ABC
{
    use Calculation , Circle;

    public function getArea(float $l, float $b)
    {
        try {
            echo $this->Area($l, $b) . " AND " . $this->circleArea(4);
        } catch (Exception $e) {
            echo "Messsage".$e->getMessage();
        }
    }
}

$abc = new ABC();
$abc->getArea(3, 4); 


