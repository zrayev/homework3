<?php

namespace Footwear;

/**
 * Class AbstractFootwear
 * @package Footwear
 */
abstract class AbstractFootwear

{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $size;
    /**
     * @var string
     */
    protected $material;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return string
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * @param $material
     * @return $this
     */
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * @return mixed
     */
    public abstract function printScreen();
}
