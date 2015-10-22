<?php
namespace Footwear;

class Shoes extends AbstractFootwear
{
    protected $name;
    protected $size;
    protected $material;
    protected $season;
    protected $shoelace;


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;     // destryct
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name; // construct
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
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @param $season
     */
    public function setSeason($season)
    {
        $this->season = $season;
    }
    /**
     * @return mixed
     */
    public function getShoelace()
    {
        return $this->shoelace;
    }

    public function setShoelace($shoelase)
    {
        $this->shoelace = $shoelase;
    }

    public function printScreen()
    {
        $str = 'Name: ' . $this->getName() . "<br>\n";
        $str .= 'Size: ' . $this->getSize() . "<br>\n";
        $str .= 'Material: ' . $this->getMaterial() . "<br>\n";
        $str .= 'Season: ' . $this->getSeason() . "<br>\n";
        $str .= 'Shoelace: ' . $this->getShoelace() . "<br>\n";

        print_r($str);
    }
}
