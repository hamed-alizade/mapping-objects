<?php


namespace App\Services;


use Illuminate\Support\Facades\Log;

class ObjectService
{
    /**
     * check if the response format is xml
     * @param string $response
     * @return \SimpleXMLElement|string
     */
    private static function isXml(string $response)
    {
        libxml_use_internal_errors(true);
        return simplexml_load_string($response);
    }

    /**
     * check if the response format is json
     * @param string $response
     * @return bool
     */
    private static function isJson(string $response)
    {
        json_decode($response);
        return (json_last_error() == JSON_ERROR_NONE);
    }

    /**
     * detect the response format
     * @param $response
     * @return false|string
     */
    public static function detectResponseFormat($response)
    {
        if (self::isXml($response) === false) {
            if (self::isJson($response) === false) {
                return false;
            }
            return'json';
        }
        return 'xml';
    }
}
