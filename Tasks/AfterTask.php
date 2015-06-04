<?php
namespace Pax\Tasks;

class AfterTask extends AbstractTask{
    
    static public function create($sDestination, $sContent){
        return self::init(['d'=>$sDestination, 'c'=>$sContent]);
    }
    
}