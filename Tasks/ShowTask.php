<?php
namespace Pax\Tasks;

class ShowTask extends \Pax\Task{
    
    static public function create($sDestination){
        return self::init(['d'=>$sDestination]);
    }
    
}