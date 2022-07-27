<?php


namespace PluginMaster\Contracts\DB;


use Closure;

interface DBInterface
{
    /**
     * @param  string  $name
     * @return self
     */
    static public function table(string $name): self;


    /**
     * @param  Closure  $closer
     * @return ?self
     */
    static public function transaction(Closure $closer): ?self;

    /**
     * @param  string|Closure  $column
     * @param  string|null  $operator
     * @param  null  $value
     * @return self
     */
    public function where(string|Closure $column, ?string $operator = null, mixed $value = null): self;

    /**
     * @param  string  $table
     * @param  string|Closure  $first
     * @param  string|null  $operator
     * @param  string|null  $second
     * @return mixed
     */
    public function join(string $table, string|Closure $first, ?string $operator = null, ?string $second = null): self;

    /**
     * @param  string  $table
     * @param  string|Closure  $first
     * @param  string|null  $operator
     * @param  string|null  $second
     * @return self
     */
    public function leftJoin(
        string $table,
        string|Closure $first,
        ?string $operator = null,
        ?string $second = null
    ): self;

    /**
     * @param  string  $first
     * @param  string  $operator
     * @param  string  $second
     * @return self
     */
    public function on(string $first, string $operator, string $second): self;

    /**
     * @param  string  $first
     * @param  string  $operator
     * @param  string  $second
     * @return self
     */
    public function orOn(string $first, string $operator, string $second): self;

    /**
     * @param  string  $column
     * @param  string|null  $operator
     * @param  null  $value
     * @return self
     */
    public function onWhere(string $column, ?string $operator = null, mixed $value = null): self;

    /**
     * @param  string|Closure  $column
     * @param  string|null  $operator
     * @param  null  $value
     * @return self
     */
    public function orWhere(string|Closure $column, ?string $operator = null, mixed $value = null): self;

    /**
     * @param  string  $columns
     * @param  string  $direction
     * @return self
     */
    public function orderBy(string $columns, string $direction): self;


    /**
     * @param  string|int  $number
     * @return self
     */
    public function limit(string|int $number): self;


    /**
     * @param  string|int  $number
     * @return self
     */
    public function offset(string|int $number): self;


    /**
     * @param  string|int  $column
     * @return self
     */
    public function groupBy(string|int $column): self;

    /**
     * @param  string  $fields
     * @return self
     */
    public function select(string $fields): self;

    /**
     * @param  array  $data
     * @return int|null
     */
    public function insert(array $data): ?int;

    /**
     * @param  array  $data
     * @return bool|int|null
     */
    public function update(array $data): bool|int|null;


    /**
     * @return bool|int|null
     */
    public function delete(): bool|int|null;

    /**
     * @return object|null
     */
    public function first(): object|null;

    /**
     * @return array|object|null
     */
    public function get(): array|object|null;

    /**
     * @return string
     */
    public function toSql(): string;

}

