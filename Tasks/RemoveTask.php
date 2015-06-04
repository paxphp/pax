<?php
namespace Pax\Tasks;

class RemoveTask extends AbstractTask{
    
    static public function create($sDestination){
        return self::init(['d'=>$sDestination]);
    }
    
}