<?php

namespace App\Http\Controllers;

use App\Http\Resources\GeneralReource;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{

    /**
     * Return all user's data in JSON format
     *
     * @return UserResource
     */
    public function indexJson()
    {
        $users = User::all();
        return new UserCollection($users);
    }


    /**
     * Return all user's data in XML format
     *
     * @return mixed
     */
    public function indexXml()
    {
        $xml= <<<XML
            <!-- <?xml version="1.0" encoding="UTF-8" ?>-->
            <root>
                <data>
                    <firstname>Ali</firstname>
                    <lastname>Alavi</lastname>
                    <father>
                        <firstname>Ahmad</firstname>
                    </father>
                    <tellnum/>
                    <email>Ahmad@mail.com</email>
                </data>
                <data>
                    <firstname>Hamed</firstname>
                    <lastname>Heydari</lastname>
                    <father>
                        <firstname>Hamid</firstname>
                    </father>
                    <tellnum>09141112233</tellnum>
                    <email>Hamed@mail.com</email>
                </data>
            </root>
        XML;

        return $xml;
    }

}
