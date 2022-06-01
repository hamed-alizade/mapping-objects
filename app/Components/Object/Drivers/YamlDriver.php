<?php


namespace App\Components\Object\Drivers;


use App\Components\Object\ObjectContract;

class YamlDriver implements ObjectContract
{
    private $object;
    private $array;

    public function __construct($object)
    {
        $this->object = $object;
        $this->array = yaml_parse($object);
    }

    public function get(string $item)
    {
        // TODO: Implement get() method.
    }

    /**
     * * return yaml object in array format
     * @return array
     */
    public function toArray(): array
    {
        return $this->array;
    }
}
