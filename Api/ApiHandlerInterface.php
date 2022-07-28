<?php


namespace PluginMaster\Contracts\Api;


use PluginMaster\Contracts\Foundation\ApplicationInterface;
use WP_REST_Request;

interface ApiHandlerInterface
{
    public function setAppInstance(ApplicationInterface $instance): self;

    public function setNamespace(string $namespace): self;

    public function setMiddleware(array $list): self;

    public function setControllerNamespace(string $namespace): self;

    public function loadRoutes(string $routes): self;

    public function register(array $api, bool $dynamicRoute = false): void;

    public function apiGenerate(): void;

    public function resolveDynamicCallback(WP_REST_Request $request);

    public function check_permission(): bool;

}
