<?php

namespace PluginMaster\Contracts\Middleware;

use WP_REST_Request;

interface MiddlewareInterface
{
    public function handler(WP_REST_Request $request);
}
