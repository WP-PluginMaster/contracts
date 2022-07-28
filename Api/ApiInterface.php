<?php

namespace PluginMaster\Contracts\Api;


interface ApiInterface
{
    public static function group(array $config, callable $callback): void;

    public static function prefix(string $prefix, callable $callback): void;

    public static function middleware(string $middlewareName, callable $callback): void;

    public static function get(string $route, $callback, bool $public = false): void;

    public static function post(string $route, $callback, bool $public = false): void;

    public static function put(string $route, $callback, bool $public = false): void;

    public static function patch(string $route, $callback, bool $public = false): void;

    public static function delete(string $route, $callback, bool $public = false): void;

    public static function all(string $route, $callback, bool $public = false): void;

    public static function dynamic(string $route, string $class, bool $public = false): void;
}
