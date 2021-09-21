<?php

namespace PluginMaster\Contracts\Middleware;

interface Middleware
{
    public function handler( \WP_REST_Request $request );
}
