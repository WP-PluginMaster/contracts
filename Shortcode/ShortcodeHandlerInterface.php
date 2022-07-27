<?php

namespace PluginMaster\Contracts\Shortcode;

use PluginMaster\Contracts\Foundation\ApplicationInterface;

interface ShortcodeHandlerInterface
{
    public function setAppInstance(ApplicationInterface $instance): ShortcodeHandlerInterface;

    public function setControllerNamespace(string $namespace): ShortcodeHandlerInterface;

    public function add(string $name, $callback): void;
}
