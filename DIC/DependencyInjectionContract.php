<?php

namespace PluginMaster\Contracts\DIC;

interface DependencyInjectionContract
{
    public function make(string $class, array $parameters = []): object;

    public function call($callable, array $parameters = []);

    public function get(string $id): object;

    public function has(string $id): bool;

    public function getClassDependencies(array $constructorParams, array $parameters): array;

    public function getMethodDependency(object $object, string $method, array $parameters): array;
}