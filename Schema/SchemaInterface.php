<?php


namespace PluginMaster\Contracts\Schema;


use Closure;

interface SchemaInterface
{
    /**
     * @param  string  $table
     * @param  Closure  $closure
     * @return self
     */
    public static function create(string $table, Closure $closure): self;

    /**
     * @param  string  $sql
     * @return self
     */
    public static function rawSql(string $sql): self;

    /**
     * @param  string  $column
     * @param  string|int  $length
     * @param  string|int  $places
     * @return self
     */
    public function decimal(string $column, string|int $length, string|int $places): self;

    /**
     * @param  string  $column
     * @param  array  $values
     * @return self
     */
    public function enum(string $column, array $values): self;

    /**
     * @param  string  $column
     * @return self
     */
    public function intIncrements(string $column): self;

    /**
     * @param  string  $column
     * @param  string|int  $length
     * @return self
     */
    public function integer(string $column, string|int $length): self;

    /**
     * @return self
     */
    public function increment(): self;


    /**
     * @return self
     */
    public function unsigned(): self;

    /**
     * @return self
     */
    public function primaryKey(): self;

    /**
     * @param  string  $column
     * @return self
     */
    public function bigIntIncrements(string $column): self;

    /**
     * @param  string  $column
     * @param  string|int  $length
     * @return self
     */
    public function bigInt(string $column, string|int $length): self;

    /**
     * @param  string  $column
     * @param  int|string  $length
     * @return self
     */
    public function string(string $column, int|string $length): self;

    /**
     * @param  string  $column
     * @return self
     */
    public function text(string $column): self;

    /**
     * @param  string  $column
     * @return self
     */
    public function date(string $column): self;

    /**
     * @param  string  $column
     * @return self
     */
    public function timestamp(string $column): self;

    /**
     * @return self
     */
    public function nullable(): self;

    /**
     * @param  mixed  $value
     * @return self
     */
    public function default(mixed $value): self;

    /**
     * @return self
     */
    public function onUpdateTimeStamp(): self;

    /**
     * @param  string  $column
     * @return self
     */
    public function foreign(string $column): self;

    /**
     * @param  string  $reference
     * @return self
     */
    public function on(string $reference): self;

    /**
     * @return string
     */
    public function getSql(): string;

    /**
     * @return void
     */
    public function execute(): void;

}
