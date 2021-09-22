<?php

namespace PluginMaster\Contracts\Middleware;

interface MiddlewareInterface
{
    public function handler( \WP_REST_Request $request );
}
