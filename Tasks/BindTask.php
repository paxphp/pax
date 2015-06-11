<?php
namespace Pax\Tasks;

class BindTask extends \Pax\Task{
    
    static public function create($sDestination, $sEvent, $sFunction){
        return self::init(['d'=>$sDestination, 'e'=>$sEvent,'f'=>$sFunction]);
    }
    
}