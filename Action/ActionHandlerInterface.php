<?php

namespace PluginMaster\Contracts\Action;

use PluginMaster\Contracts\Foundation\ApplicationInterface;

interface ActionHandlerInterface
{
    public function setAppInstance(ApplicationInterface $instance): self;

    public function setControllerNamespace(string $namespace): self;

    public function add(string $name, $callback, int $priority = 10): void;
}
