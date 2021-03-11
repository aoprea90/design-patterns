<?php


namespace Builder\Model;


interface QueryBuilder
{
    public function select(string $table, array $fields):self;

    public function where(string $field, string $value, string $operator = '='):self;

    public function limit( int $offset, int $start = 0):self;

    public function getSql():string;
}