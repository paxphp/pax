<?php
namespace Pax\Tasks;

class ReplaceWithTask extends AbstractTask{
    
    static public function create($sDestination, $sContent = NULL){
        return self::init(['d'=>$sDestination, 'c'=>$sContent]);
    }
    
}