<?php
namespace Pax\Tasks;

trait TaskTrait{

    static protected function init(){
        $reflect  = new \ReflectionClass(get_called_class());
        return $reflect->newInstanceArgs(func_get_args());
    }
    
    static public function create(){
        return self::init(func_get_args());
    }

}