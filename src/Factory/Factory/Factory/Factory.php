<?php

namespace Factory\Factory\Factory;

use Factory\Factory\Model\Car;

interface Factory
{
    public function buildCar():Car;
}