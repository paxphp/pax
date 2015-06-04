<?php
namespace Pax\Tasks;

class BindTask extends AbstractTask{
    
    static public function create($sDestination, $sEvent, $sFunction){
        return self::init(['d'=>$sDestination, 'e'=>$sEvent,'f'=>$sFunction]);
    }
    
}