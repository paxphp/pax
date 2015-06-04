<?php
namespace Pax\Tasks;

class ToggleTask extends AbstractTask{
    
    static public function create($sDestination){
        return self::init(['d'=>$sDestination]);
    }
    
}