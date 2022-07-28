<?php

namespace PluginMaster\Contracts\Request;

interface RequestInterface
{
    public function all(): array;

    public function get(string $key);

    public function isMethod(string $method): bool;

    public function header(string $key);

    public function url(): string;
}
