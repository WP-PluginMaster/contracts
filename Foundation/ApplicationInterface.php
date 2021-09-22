<?php

namespace PluginMaster\Contracts\Foundation;

interface ApplicationInterface
{

    /**
     * Get the version number of the application.
     *
     * @return string
     */
    public function version();

    /**
     * Get the base path of the PluginMaster installation(plugin).
     *
     * @return string
     */
    public function basePath();

    /**
     * Get the path to the bootstrap directory.
     *
     * @return string
     */
    public function bootstrapPath();

    /**
     * Get the path to the application configuration files.
     *
     * @return string
     */
    public function configPath();

    /**
     * Get the path to the database directory.
     *
     * @return string
     */
    public function databasePath();

    /**
     * Get the path to the resources directory.
     *
     * @return string
     */
    public function resourcePath();

    /**
     * Get the path to the enqueue directory.
     *
     * @return string
     */
    public function enqueuePath();

    /**
     * Get the path to the hook directory.
     *
     * @return string
     */
    public function hookPath();


    /**
     * Get the path to the route directory.
     *
     * @return string
     */
    public function routePath();


    /**
     * Get the path to the shortCode directory.
     *
     * @return string
     */
    public function hooksPath();


    /**
     * Boot the application's service providers.
     *
     * @return void
     */
    public function boot();


}
