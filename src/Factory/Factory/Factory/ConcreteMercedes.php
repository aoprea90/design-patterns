<?php

namespace Factory\Factory\Factory;

use Factory\Factory\Model\Mercedes;
use Factory\Factory\Model\Car;

class ConcreteMercedes implements Factory
{
    public function buildCar(): Car
    {
        return new Mercedes();
    }
}