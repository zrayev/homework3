<?php
namespace Footwear;

class Slippers extends AbstractFootwear
{
    protected $name;
    protected $model;
    protected $size;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }
    public function getMaterial()
    {
        return $this->size;
    }

    public function setMaterial($material)
    {
        $this->size = $material;
    }
    public function __printScreen()
    {
        $str = 'Name: ' . $this->getName() . "<br>\n";
        $str .= 'Model: ' . $this->getModel() . "<br>\n";
        $str .= 'Size: ' . $this->getSize() . "<br>\n";
        $str .= 'Material: ' . $this->getMaterial() . "<br>\n";

        print_r($str);
    }
}