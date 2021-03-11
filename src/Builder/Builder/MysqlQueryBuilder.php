<?php


namespace Builder\Builder;


use Builder\Model\QueryBuilder;

class MysqlQueryBuilder implements QueryBuilder
{
    /** @var \stdClass */
    protected $query;

    public function __construct()
    {
        $this->reset();
    }

    protected function reset() : void
    {
        $this->query = new \stdClass();
    }

    public function select(string $table, array $fields): QueryBuilder
    {
        $this->reset();
        $this->query->base = "SELECT ".implode(',', $fields) . " FROM ".$table;
        $this->query->type = 'select';

        return $this;
    }

    public function where(string $field, string $value, string $operator = '='): QueryBuilder
    {

        if (!in_array($this->query->type, ['select', 'update', 'delete'])) {
            throw new \Exception("Where method only suitable for select, update, delete");
        }

        $this->query->where[] = "$field $operator $value";

        return $this;
    }

    public function limit(int $offset, int $start = 0): QueryBuilder
    {
        $this->query->limit = " LIMIT $offset, $start";

        return $this;
    }

    public function getSql(): string
    {
        $sql = $this->query->base;
        $whereClause = $this->query->where;

        if ($whereClause) {
            $where = " WHERE " . implode(" AND ", $whereClause);
            $sql .= $where;
        }

        if ($this->query->limit) {
            $sql .= $this->query->limit;
        }

        $sql.=';';

        return $sql;
    }
}