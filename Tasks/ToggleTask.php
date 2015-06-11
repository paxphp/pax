<?php
namespace Pax\Tasks;

class ToggleTask extends \Pax\Task{
    
    static public function create($sDestination){
        return self::init(['d'=>$sDestination]);
    }
    
}