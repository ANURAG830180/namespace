<?php

Interface Circle
{
    public function getArea($l, $b);
}


abstract class Dimension implements Circle
{

    private $data = 'Anurag';

    public abstract function getDimension();

    public function getValue()
    {
        return $this->data;
    }


}

class Abc extends Dimension
{

    private $name = "anurag";

    public function getArea($len, $bre)
    {
        return "Implements done.";
    }

    public function getDimension()
    {
        return "Abstraction done.";
    }

    public function getName()
    {
        return $this->name;
    }                                                                                                                                                                                           }
}


?>