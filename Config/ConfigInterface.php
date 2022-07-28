<?php

namespace PluginMaster\Contracts\Config;

interface ConfigInterface
{
    public static function get($key);

    public static function set($key);
}
