<?php


namespace Play\Builder;


class DirectorBuilder
{
    private $builder;

    public function __construct(HouseBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function createHouse()
    {
        /** @var HouseBuilder $house */
        $house = $this->builder
            ->createRoof()
            ->createWalls()
            ->createWindow()
            ->createWalls()
            ->createDoor()
            ->createPool()
            ->getHouse()
        ;

        var_dump($house);
    }
}