<?php


namespace Builder;


use Builder\Model\QueryBuilder;

class BuilderManager
{
    private $queryBuilder;

    public function __construct(QueryBuilder $queryBuilder)
    {
        $this->queryBuilder = $queryBuilder;
        $this->createQuery();
    }

    public function createQuery()
    {
        $query = $this->queryBuilder
            ->select("users", ["name", "email", "password"])
            ->where("age", 18, ">")
            ->where("age", 30, "<")
            ->limit(10, 20)
            ->getSql()
        ;

        var_dump($query);
    }
}