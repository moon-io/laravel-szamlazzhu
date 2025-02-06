<?php


namespace SzuniSoft\SzamlazzHu\Client\ApiErrors;


class OrderNumberAlreadyExists extends ClientException
{

    protected $code = 152;

    protected $message = 'An invoice already exists with this order number.';

    /**
     * More detailed info of exception.
     *
     * @return string
     */
    function getInfo()
    {
        return 'Repetition can be enabled on the Settings page.';
    }
}