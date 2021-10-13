<?php

namespace PluginMaster\Contracts\Cache;

interface CacheHandlerInterface
{

    public function createFile($fileName, $content, $directory = null);

    public function cacheFilePath($fileName, $directory = null);

    public function isExist($path);

    public function check($fileName, $directory = null);

    public function reset();

    public function setAppVersion($instance);

    public function setCachePath($path);

    public function get($fileName, $directory = null);

}
