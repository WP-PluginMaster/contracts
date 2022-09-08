<?php

namespace PluginMaster\Contracts\SideMenu;


use PluginMaster\Contracts\Foundation\ApplicationInterface;

interface SideMenuHandlerInterface
{
    public function setAppInstance(ApplicationInterface $instance): self;

    public function setNamespace(string $namespace): self;

    public function loadMenuFile(string $sidemenu): self;

    public function removeFirstSubMenu(): void;
}
