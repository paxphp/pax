<?php
namespace Pax\Tasks;

class HideTask extends \Pax\Task{
    
    static public function create($sDestination){
        return self::init(['d'=>$sDestination]);
    }
    
}