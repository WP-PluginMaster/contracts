<?php

namespace PluginMaster\Contracts\Database;

interface MigrationInterface
{
    public static function handler(): void;
}
