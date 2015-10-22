<?php
namespace Footwear;

class Slippers extends AbstractFootwear
{
    protected $name;
    protected $size;
    protected $material;
    protected $type;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * @param $material
     */
    public function setMaterial($material)
    {
        $this->material = $material;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    public function printScreen()
    {
        $str = 'Name: ' . $this->getName() . "<br>\n";
        $str .= 'Size: ' . $this->getSize() . "<br>\n";
        $str .= 'Material: ' . $this->getMaterial() . "<br>\n";
        $str .= 'Type: ' . $this->getType() . "<br>\n";

        print_r($str);
    }
}