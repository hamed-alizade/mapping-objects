<?php


namespace App\Components\Object\Drivers;


class XmlDriver implements \App\Components\Object\ObjectContract
{
    private $object;
    private $array;

    public function __construct($object)
    {
        $this->object = $object;
        $xml = simplexml_load_string($object, "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($xml);
        $this->array = json_decode($json,TRUE);
    }

    public function get(string $item)
    {
        // TODO: Implement get() method.
    }

    /**
     * return xml object in array format
     * @return array
     */
    public function toArray(): array
    {
        return $this->array;
    }
}
