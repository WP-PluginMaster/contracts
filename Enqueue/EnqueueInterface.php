<?php


namespace PluginMaster\Contracts\Enqueue;


interface EnqueueInterface
{

    public static function front();

    public static function after($hook);

    public static function admin();

    public function headerScript( $path, $options = [] );

    public function headerScriptCdn( $path, $options = [] );

    public function footerScript( $path, $options = [] );

    public function footerScriptCdn( $path, $options = [] );

    public function style( $path, $options = [] );

    public function styleCdn( $path, $options = [] );

    public function localizeScript( $handle, $objectName, $data );

    public function inlineScript( $data, $option = [] );

    public function inlineStyle( $data, $handle = '' );

}
