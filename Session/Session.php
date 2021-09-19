<?php

namespace PluginMaster\Contracts\Session;

interface Session
{

    public static function destroyFlush();

    public static function flush( $key, $message = null );

    public static function set( $name, $message );

    public static function get( $key );

    public static function forget( $key );
}
