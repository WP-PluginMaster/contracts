<?php

namespace PluginMaster\Contracts\Action;

use PluginMaster\Contracts\Foundation\ApplicationInterface;

interface ActionHandlerInterface
{
    public function setAppInstance(ApplicationInterface $instance): ActionHandlerInterface ;

    public function setControllerNamespace(string $namespace): ActionHandlerInterface ;

    public function add(string $name, $callback, int $priority = 10): void ;
}
