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

            $object = App::make('object', ['object' => $response])->driver($format)->toArray()['data'];
            $corresponding = App::make('object', ['object' => config('corresponding')])->driver('yaml')->toArray();

            return array_map(function ($item) use ($corresponding) {
                return ObjectService::map($item, $corresponding);
            }, $object);
        }
        catch (\Exception $exception) {
            Log::error($exception->getCode() . ': ' . $exception->getMessage());
            return false;
        }
    }

}
