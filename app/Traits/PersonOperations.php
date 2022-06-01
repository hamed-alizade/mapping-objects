<?php


namespace App\Traits;

use App\Services\ObjectService;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

trait PersonOperations
{
    /**
     * get data from url and detect response format and transform every key to its corresponding key
     *
     * @param string $url
     * @return array|array[]|false
     */
    public function getData(string $url)
    {
        try {
            $response = Http::get($url);

            $format = ObjectService::detectResponseFormat($response);
            return $format;
        }
        catch (\Exception $exception) {
            Log::error($exception->getCode() . ': ' . $exception->getMessage());
            return false;
        }
    }

}
