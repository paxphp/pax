<?php
namespace Pax\Tasks;

class CssTask extends \Pax\Task{
    
    static public function create($sDestination, $sPropertyName, $sValue){
        return self::init(['d'=>$sDestination, 'p'=>$sPropertyName, 'v'=>$sValue]);
    }
    
}