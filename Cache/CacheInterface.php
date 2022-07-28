<?php

namespace PluginMaster\Contracts\Cache;

interface CacheInterface
{
    public static function get(string $fileName, string $directory = null);

    public static function set(string $fileName, $content, string $directory = null);

    public static function reset();

    public static function check(string $fileName, string $directory = null);
}
