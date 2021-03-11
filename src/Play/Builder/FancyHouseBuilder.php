<?php


namespace Play\Builder;


class FancyHouseBuilder implements HouseBuilder
{
    private $house;

    public function __construct()
    {
        $this->reset();
    }

    public function reset()
    {
        $this->house = new \stdClass();
    }

    public function createRoof()
    {
        $this->reset();
        $this->house->roof = "Brand new roof";

        return $this;
    }

    public function createWindow()
    {
        $this->house->window = "10 big windows";

        return $this;
    }

    public function createWalls()
    {
        $this->house->walls = 12;

        return $this;
    }

    public function createDoor()
    {
        $this->house->door = 2;

        return $this;
    }

    public function createPool()
    {
        $this->house->pool = "Big pool";

        return $this;
    }

    public function createYard()
    {
        $this->house->yard = 100;

        return $this;
    }

    public function getHouse()
    {
        return sprintf("The new house has %s with %s and %d walls and %d front door pool: %s and yard:%d",
            $this->house->roof,
            $this->house->window,
            $this->house->walls,
            $this->house->door,
            property_exists($this->house, 'pool') ? $this->house->pool : "does not have pool",
            property_exists($this->house, 'yard') ? $this->house->yard : "does not have yard"
        );
    }
}