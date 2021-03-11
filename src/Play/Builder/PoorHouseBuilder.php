<?php


namespace Play\Builder;


class PoorHouseBuilder implements HouseBuilder
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
        $this->house->roof = "Old roof with holes";

        return $this;
    }

    public function createWindow()
    {
        $this->house->window = "2 windows, one cracked";

        return $this;
    }

    public function createWalls()
    {
        $this->house->walls = 4;

        return $this;
    }

    public function createDoor()
    {
        $this->house->door = 1;

        return $this;
    }

    public function createPool()
    {
        // TODO: Implement createPool() method.
    }

    public function createYard()
    {
        // TODO: Implement createYard() method.
    }

    public function getHouse()
    {
        return sprintf("The new poor house has %s with %s and %d walls and %d front door",
            $this->house->roof,
            $this->house->window,
            $this->house->walls,
            $this->house->door
        );
    }
}