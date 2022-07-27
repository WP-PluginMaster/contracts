<?php


namespace PluginMaster\Contracts\Request;


interface RequestInterface
{
    public function all(): array;

    public function get(string $key): mixed;

    public function isMethod(string $method): bool;

    public function header(string $key): mixed;

    public function url(): string;
}
