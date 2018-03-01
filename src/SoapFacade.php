<?php namespace Wongpinter\Soap;
/**
 * Created By: root@wongpinter.com
 * Date: 1/26/17
 * Time: 16:40
 */
use Illuminate\Support\Facades\Facade;

class SoapFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'soap.client';
    }
}