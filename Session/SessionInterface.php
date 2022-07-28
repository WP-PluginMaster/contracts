<?php

namespace PluginMaster\Contracts\Session;

interface SessionInterface
{
    public static function destroyFlush(): void;

    public static function flush(string $key, $message = null): void;

    public static function set(string $name, $message): void;

    public static function get(string $key);

    public static function forget(string $key): void;
}
