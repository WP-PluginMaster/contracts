<?php

namespace PluginMaster\Contracts\Shortcode;

interface ShortcodeHandler
{
    public function setAppInstance( $instance );

    public function setControllerNamespace( $namespace );

    public function add( $name, $callback );
}
