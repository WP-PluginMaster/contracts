<?php


namespace PluginMaster\Contracts\SideMenu;


interface SideMenu
{
    public static function parent( $slug, $options, $callback = null );

    public static function child( $slug, $options );
}
