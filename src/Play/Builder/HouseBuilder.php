<?php


namespace Play\Builder;


interface HouseBuilder
{
    public function createRoof();

    public function createWindow();

    public function createWalls();

    public function createDoor();

    public function createPool();

    public function createYard();

    public function getHouse();
}