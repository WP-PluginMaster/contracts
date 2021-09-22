<?php


namespace PluginMaster\Contracts\Api;


interface ApiHandlerInterface
{

    public function setAppInstance( $instance );

    public function setNamespace( $namespace );

    public function setMiddleware( $list );

    public function setControllerNamespace( $namespace );

    public function loadRoutes( $routes );

    public function register( $api, $dynamicRoute = false );

    public function apiGenerate();

    public function resolveDynamicCallback( $request );

    public function check_permission();

}
