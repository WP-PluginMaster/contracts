<?php

namespace PluginMaster\Contracts\Cache;

interface CacheHandlerInterface
{

    public function createFile(string $fileName, string $content, string $directory = '');

    public function cacheFilePath(string $fileName, string $directory = ''):string;

    public function check(string $fileName, string $directory = ''): bool ;

    public function reset(string $fileName = ''): bool ;

    public function setAppVersion(string $instance): CacheHandlerInterface;

    public function setCachePath(string $path): CacheHandlerInterface;

    public function get(string $fileName, string $directory = ''): string ;

}
