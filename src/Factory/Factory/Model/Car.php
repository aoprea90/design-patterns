<?php

namespace Factory\Factory\Model;

class Car
{
    use CarOptions;

    public function getCar()
    {
        return sprintf("Created car is type %s , has fuel type %s ", static::$brand, $this->fuelType);
    }
}