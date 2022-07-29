<?php

namespace PluginMaster\Contracts\SideMenu;

interface SideMenuInterface
{
    public static function parent(string $title, string $slug = null): self;

    public function capability(string $capability = 'manage_options'): self;

    public function menuTitle(string $title): self;

    public function callback($callback): self;

    public function icon(string $icon): self;

    public function position(int $position): self;

    public function child(string $title, string $slug = null): self;

    public static function submenu(string $parentSlug, string $title, string $slug = null): self;

    public function getData(): array;
}
