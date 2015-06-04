<?php
namespace Pax\Tasks;

class AppendTask extends AbstractTask{
    
    static public function create($sDestination, $sContent){
        return self::init(['d'=>$sDestination, 'c'=>$sContent]);
    }
    
}