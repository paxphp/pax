<?php
namespace Pax\Tasks;

class UnbindTask extends AbstractTask{
    
    static public function create($sDestination, $sEvent){
        return self::init(['d'=>$sDestination, 'e'=>$sEvent]);
    }
    
}