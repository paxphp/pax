<?php
namespace Pax\Tasks;

class AfterTask extends \Pax\Task{
    
    static public function create($sDestination, $sContent){
        return self::init(['d'=>$sDestination, 'c'=>$sContent]);
    }
    
}