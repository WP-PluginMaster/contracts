<?php

namespace PluginMaster\Contracts\Shortcode;

interface ShortcodeHandlerInterface
{
    public function setAppInstance($instance);

    public function setControllerNamespace($namespace);

    public function add($name, $callback);
}
