<?php

namespace PluginMaster\Contracts\Action;

interface ActionHandlerInterface
{
    public function setAppInstance( $instance );

    public function setControllerNamespace( $namespace );

    public function add( $name, $callback );
}
