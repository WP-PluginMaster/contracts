<?php


namespace PluginMaster\Contracts\SideMenu;


use PluginMaster\Contracts\Foundation\ApplicationInterface;

interface SideMenuHandlerInterface
{
    public function setAppInstance(ApplicationInterface $instance): self;

    public function setNamespace(string $namespace): self;

    public function loadMenuFile(string $sidemenu): self;

    public function addMenuPage(string $slug, array $options): void;

    public function registerParentMenu(array $options, string $slug): void;

    public function removeFirstSubMenu(): void;

    public function addSubMenuPage(string $slug, array $options, string $parentSlug = ''): void;

    public function validateOptions(array $options, bool $parent = true): void;
}
