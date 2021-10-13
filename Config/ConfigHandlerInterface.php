<?php

namespace PluginMaster\Contracts\Config;

interface ConfigHandlerInterface
{
    public function setPath($path);

    public function resolveData($key);

}
