<?php


namespace App\Components\Object;


interface ObjectContract
{
    public function get(string $item);
    public function toArray() : array;
}
