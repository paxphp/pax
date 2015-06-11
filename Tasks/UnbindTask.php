<?php
namespace Pax\Tasks;

class UnbindTask extends \Pax\Task{
    
    static public function create($sDestination, $sEvent){
        return self::init(['d'=>$sDestination, 'e'=>$sEvent]);
    }
    
}