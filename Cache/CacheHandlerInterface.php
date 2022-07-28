<?php

namespace PluginMaster\Contracts\Cache;

interface CacheHandlerInterface
{
    public function createFile(string $fileName, string $content, string $directory = ''): bool;

    public function cacheFilePath(string $fileName, string $directory = ''): string;

    public function check(string $fileName, string $directory = ''): bool;

    public function reset(string $fileName = ''): bool;

    public function setAppVersion(string $appVersion): self;

    public function setCachePath(string $path): self;

    public function get(string $fileName, string $directory = ''): string;

}
