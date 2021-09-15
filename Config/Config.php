<?php

namespace PluginMaster\Contracts\Config;

interface Config
{
    public static function get( $key );

    public static function set( $key );

}
