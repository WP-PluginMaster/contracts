<?php


namespace PluginMaster\Contracts\SideMenu;


interface SideMenuInterface
{
    public static function parent($slug, $options, $callback = null);

    public static function child($slug, $options);
}
