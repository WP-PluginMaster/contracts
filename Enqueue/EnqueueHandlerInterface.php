<?php


namespace PluginMaster\Contracts\Enqueue;


interface EnqueueHandlerInterface
{

    public function setAppInstance( $app );

    public function loadEnqueueFile( $enqueueFile );

    public function register( $config );

    public function initEnqueue();

    public function localizeScript( $id, $objectName, $data );

    public function inlineScript( $data, $option );

    public function inlineStyle( $data, $handle );

}
