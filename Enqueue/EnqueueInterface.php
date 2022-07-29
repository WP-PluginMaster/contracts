<?php


namespace PluginMaster\Contracts\Enqueue;


interface EnqueueInterface
{
    public static function front(): self;

    public static function on(string $hook): self;

    public static function admin(): self;

    public function getData(): array;

    public function script(string $path, ?string $id = null): self;

    public function scriptCdn(string $cdnPath, ?string $id = null): self;

    public function style(string $path, ?string $id = null, string $media = 'all'): self;

    public function styleCdn(string $cdnPath, ?string $id = null): self;

    public function localizeScript(string $handle, string $objectName, $data): void;

    public function inlineScript(string $data, array $option = []): void;

    public function inlineStyle(string $data, string $handle = ''): void;

    public function dependency(array $deps): self;

    public function inHeader(): self;

    public function inFooter(): self;

    public function version(string $ver): self;

    public function attributes(array $attributes): self;
}
