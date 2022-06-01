<?php

namespace App\Http\Controllers;

use App\Traits\PersonOperations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PersonController extends Controller
{
    use PersonOperations;

    const URL = 'http://127.0.0.1:8000/api/user/json';

    /**
     * Store get data form API in JSON/XML format
     *
     * @return string
     */
    public function store()
    {
        $data = self::getData(self::URL);

        return $data;
    }
}
