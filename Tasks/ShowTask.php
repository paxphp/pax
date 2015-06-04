<?php
namespace Pax\Tasks;

class ShowTask extends AbstractTask{
    
    static public function create($sDestination){
        return self::init(['d'=>$sDestination]);
    }
    
}