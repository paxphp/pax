<?php
namespace Pax\Tasks;

class AddClassTask extends AbstractTask{
    
    static public function create($sDestination, $sClassName){
        return self::init(['d'=>$sDestination, 'c'=>$sClassName]);
    }
    
}