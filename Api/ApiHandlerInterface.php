<?php


namespace PluginMaster\Contracts\Api;


use PluginMaster\Contracts\Foundation\ApplicationInterface;
use WP_REST_Request;

interface ApiHandlerInterface
{

    public function setAppInstance(ApplicationInterface $instance): ApiHandlerInterface;

    public function setNamespace(string $namespace): ApiHandlerInterface;

    public function setMiddleware(array $list): ApiHandlerInterface;

    public function setControllerNamespace(string $namespace): ApiHandlerInterface;

    public function loadRoutes(string $routes): ApiHandlerInterface;

    public function register(array $api, bool $dynamicRoute = false): void ;

    public function apiGenerate(): void ;

    public function resolveDynamicCallback(WP_REST_Request $request);

    public function check_permission(): bool ;

}
