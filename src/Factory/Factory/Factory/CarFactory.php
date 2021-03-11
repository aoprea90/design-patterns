<?php

namespace Factory;

use Factory\Factory\Factory\ConcreteMercedes;
use Factory\Factory\Model\Car;
use Factory\Factory\Factory\ConcreteAudi;

class CarFactory
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function startCarBuild(): Car
    {
        switch ($this->name) {
            case 'mercedes':
                $model = new ConcreteMercedes();
                $model = $model->buildCar();
                break;

            case 'audi':
                $model = new ConcreteAudi();
                $model = $model->buildCar();
                break;
            default:
                $model = new ConcreteMercedes();
                $model = $model->buildCar();
                break;
        }

        return $model;
    }
}