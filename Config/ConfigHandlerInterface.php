<?php

namespace PluginMaster\Contracts\Config;

interface ConfigHandlerInterface
{
    public function setPath(string $path): string;

    public function resolveData(string $key): mixed;

}
