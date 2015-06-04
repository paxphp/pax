<?php
namespace Pax\Tasks;

class HideTask extends AbstractTask{
    
    static public function create($sDestination){
        return self::init(['d'=>$sDestination]);
    }
    
}