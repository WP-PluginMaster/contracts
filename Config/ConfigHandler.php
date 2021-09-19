<?php

namespace PluginMaster\Contracts\Config;

interface ConfigHandler
{
    public function setPath( $path );

    public function resolveData( $key );

}
