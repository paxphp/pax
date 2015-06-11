<?php
namespace Pax\Tasks;

class AppendTask extends \Pax\Task{
    
    static public function create($sDestination, $sContent){
        return self::init(['d'=>$sDestination, 'c'=>$sContent]);
    }
    
}