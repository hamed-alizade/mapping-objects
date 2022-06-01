<?php


namespace App\Components\Object;


use App\Components\Object\Drivers\JsonDriver;
use App\Components\Object\Drivers\XmlDriver;
use App\Components\Object\Drivers\YamlDriver;
use Illuminate\Support\Manager;

class ObjectManager extends Manager
{

    private $object;

    /**
     * initialize ObjectManager
     * @param $container
     * @param $object
     */
    public function __construct($container, $object)
    {
        $this->object = $object;
        Parent::__construct($container);
    }

    /**
     * create new driver in custom format
     * @param string $name
     * @return mixed
     */
    public function channel(string $name)
    {
        return $this->driver($name);
    }

    /**
     * return default driver
     * @return string
     */
    public function getDefaultDriver()
    {
        return 'json';
    }

    /**
     * create new driver in xml format
     * @return XmlDriver
     */
    public function createXmlDriver()
    {
        return new XmlDriver($this->object);
    }

    /**
     * create new driver in json format
     * @return JsonDriver
     */
    public function createJsonDriver()
    {
        return new JsonDriver($this->object);
    }

    /**
     * create new driver in yaml format
     * @return YamlDriver
     */
    public function createYamlDriver()
    {
        return new YamlDriver($this->object);
    }
}
