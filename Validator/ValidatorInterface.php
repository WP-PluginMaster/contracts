<?php


namespace PluginMaster\Contracts\Validator;


use PluginMaster\Request\Request;

interface ValidatorInterface
{
    /**
     * @param $request
     * @param $validatorData
     * @return mixed
     */
    static public function make(Request $request, $validatorData);

    /**
     * @return mixed
     */
    public function fails();

    /**
     * @return mixed
     */
    public function errors();

}
