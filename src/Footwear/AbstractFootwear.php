<?php

namespace Footwear;

abstract class AbstractFootwear
{
    public abstract function getName();

    public abstract function setName($name);

    public abstract function getModel();

    public abstract function setModel($model);

    public abstract function getSize();

    public abstract function setSize($size);

    public abstract function getMaterial();

    public abstract function setMaterial($material);

    function __get($property)
    {
        return $this->$property;
    }

    function __set($property, $value)
    {
        $this->$property = $value;
    }
}
