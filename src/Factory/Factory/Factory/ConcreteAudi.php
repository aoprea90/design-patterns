<?php

namespace Factory\Factory\Factory;

use Factory\Factory\Model\Car;
use Factory\Factory\Model\Audi;

class ConcreteAudi implements Factory
{
    public function buildCar(): Car
    {
        return new Audi();
    }
}