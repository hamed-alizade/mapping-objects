<?php


namespace App\Components\Object\Drivers;


use App\Components\Object\ObjectContract;

class JsonDriver implements ObjectContract
{
    private $object;
    private $array;

    public function __construct($object)
    {
        $this->object = $object;
        $this->array = json_decode($this->object, true) ?? [];
    }

    public function get(string $item)
    {
        // TODO: Implement get() method.
    }


    /**
     * return json object in array format
     * @return array
     */
    public function toArray(): array
    {
        return $this->array;
    }


}
