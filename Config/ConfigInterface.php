<?php

namespace PluginMaster\Contracts\Config;

interface ConfigInterface
{
    public static function get($key): mixed;

    public static function set($key);

}
