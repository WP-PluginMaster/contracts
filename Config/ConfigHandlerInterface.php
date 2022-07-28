<?php

namespace PluginMaster\Contracts\Config;

interface ConfigHandlerInterface
{
    public function setPath(string $path): void;

    public function resolveData(string $key);
}
