<?php


namespace PluginMaster\Contracts\Enqueue;


interface EnqueueInterface
{

    public static function front(): self;

    public static function on(string $hook): self;

    public static function admin(): self;

    public function headerScript(string $path, array $options = []): void;

    public function headerScriptCdn(string $path, array $options = []): void;

    public function footerScript(string $path, array $options = []): void;

    public function footerScriptCdn(string $path, array $options = []): void;

    public function style(string $path, array $options = []): void;

    public function styleCdn(string $path, array $options = []): void;

    public function localizeScript(string $handle, string $objectName, mixed $data): void;

    public function inlineScript(string $data, array $option = []): void;

    public function inlineStyle(string $data, string $handle = ''): void;

}
