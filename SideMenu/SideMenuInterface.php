<?php


namespace PluginMaster\Contracts\SideMenu;


interface SideMenuInterface
{
    public static function parent(string $slug, array $options, callable $callback = null): void;

    public static function child(string $slug, array $options): void;
}
