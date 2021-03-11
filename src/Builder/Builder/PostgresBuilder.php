<?php


namespace Builder\Builder;


use Builder\Model\QueryBuilder;

class PostgresBuilder extends MysqlQueryBuilder
{
    public function limit(int $offset, int $start = 0): QueryBuilder
    {
        parent::limit($offset, $start);

        $this->query->limit = " LIMIT " . $start . " OFFSET " . $offset;

        return $this;
    }
}