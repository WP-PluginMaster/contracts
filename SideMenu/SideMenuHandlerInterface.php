<?php


namespace PluginMaster\Contracts\SideMenu;


interface SideMenuHandlerInterface
{
    public function setAppInstance( $instance );

    public function setNamespace( $namespace );

    public function loadMenuFile( $sidemenu );

    public function addMenuPage( $slug, $options );

    public function registerParentMenu( $options, $slug );

    public function removeFirstSubMenu();

    public function addSubMenuPage( $slug, $options, $parentSlug = null );

    public function validateOptions( $options, $parent = true );
}
