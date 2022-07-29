<?php

namespace PluginMaster\Contracts\Foundation;

interface ApplicationInterface
{
    /**
     * Get the version number of the application.
     *
     * @return string
     */
    public function version(): string;

    /**
     * Get the path to the application configuration files.
     *
     * @return string
     */
    public function configPath(): string;

    /**
     * Get the path to the resources' directory.
     *
     * @return string
     */
    public function viewPath(): string;

    /**
     * Boot the application's service providers.
     *
     * @return void
     */
    public function boot(): void;

    /**
     * Generate & Get instance from container.
     *
     * @param string $class
     * @return void
     */
    public function get(string $class): object;
}
