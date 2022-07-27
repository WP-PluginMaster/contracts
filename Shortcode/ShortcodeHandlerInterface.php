<?php

namespace PluginMaster\Contracts\Shortcode;

use PluginMaster\Contracts\Foundation\ApplicationInterface;

interface ShortcodeHandlerInterface
{
    public function setAppInstance(ApplicationInterface $instance): self;

    public function setControllerNamespace(string $namespace): self;

    public function add(string $name, $callback): void;
}
