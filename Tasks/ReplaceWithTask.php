<?php
namespace Pax\Tasks;

class ReplaceWithTask extends \Pax\Task{
    
    static public function create($sDestination, $sContent = NULL){
        return self::init(['d'=>$sDestination, 'c'=>$sContent]);
    }
    
}