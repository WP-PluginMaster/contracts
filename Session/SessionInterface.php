<?php

namespace PluginMaster\Contracts\Session;

interface SessionInterface
{
    public static function destroyFlush(): void;

    public static function flush(string $key, ?string $message = null): void;

    public static function set(string $name, mixed $message): void;

    public static function get(string $key): mixed;

    public static function forget(string $key): void;
}
