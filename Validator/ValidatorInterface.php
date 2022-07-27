<?php


namespace PluginMaster\Contracts\Validator;


use PluginMaster\Request\Request;

interface ValidatorInterface
{
    /**
     * @param  Request  $request
     * @param $validatorData
     * @return self
     */
    static public function make(Request $request, $validatorData): self;

    /**
     * @return bool
     */
    public function fails(): bool;

    /**
     * @return array
     */
    public function errors(): array;

}
