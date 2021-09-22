<?php


namespace PluginMaster\Contracts\Request;


interface RequestInterface
{
    public function all();

    public function get( $property );

    public function isMethod( $method );

    public function header( $key );

    public function url();
}
