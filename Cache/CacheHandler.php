<?php

namespace PluginMaster\Contracts\Cache;

interface CacheHandler
{

    public function createFile( $fileName, $content, $directory = null );

    public function createDir( $path );

    public function cachePath( $path = null );

    public function cacheFilePath( $fileName, $directory = null );

    public function generateFileName( $fileName );

    public function check( $fileName, $directory = null );

    public function reset();

    public function setAppInstance( $instance );

    public function setCachePath( $path );

}
