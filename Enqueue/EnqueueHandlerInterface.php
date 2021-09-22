<?php


namespace PluginMaster\Contracts\Enqueue;


interface EnqueueHandlerInterface
{

    public function setAppInstance( $app );

    public function loadEnqueueFile( $enqueueFile );

    public function addAdminEnqueues();

    public function addFrontEnqueues();

    public function register( $data, $admin = false, $type = '' );

    public function initEnqueue( $admin = true );

    public function localizeScript( $id, $objectName, $data );

    public function inlineScript( $data, $option );

    public function inlineStyle( $data, $handle );

}
