<?php


namespace PluginMaster\Contracts\Api;


interface Api
{

    public static function group( $config, $callback );

    public static function prefix( $config, $callback );

    public static function middleware( $config, $callback );

    public static function get( $route, $callback, $public = false );

    public static function post( $route, $callback, $public = false );

    public static function put( $route, $callback, $public = false );

    public static function patch( $route, $callback, $public = false );

    public static function delete( $route, $callback, $public = false );

    public static function all( $route, $callback, $public = false );

    public static function dynamic( $route, $class, $public = false );


}
