<?php


namespace PluginMaster\Contracts\Enqueue;


use PluginMaster\Contracts\Foundation\ApplicationInterface;

interface EnqueueHandlerInterface
{
    public function setAppInstance(ApplicationInterface $app): self;

    public function loadEnqueueFile(string $enqueueFile): void;

    public function initEnqueue(EnqueueInterface $enqueue): void;

    public function localizeScript(string $id, string $objectName, array $data): void;

    public function inlineScript(string $data, array $option): void;

    public function inlineStyle(string $data, string $handle): void;

}
