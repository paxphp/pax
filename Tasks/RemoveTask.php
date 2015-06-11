<?php
namespace Pax\Tasks;

class RemoveTask extends \Pax\Task{
    
    static public function create($sDestination){
        return self::init(['d'=>$sDestination]);
    }
    
}