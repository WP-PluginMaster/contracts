<?php


namespace PluginMaster\Contracts\Shortcode;


interface ShortcodeInterface
{
    public static function add(string $name, $callback);
}
