<?php
namespace Pax\Tasks;

class AttrTask extends AbstractTask{
    
    static public function create($sDestination, $sAttribute, $sContent){
        return self::init(['d'=>$sDestination, 'a'=>$sAttribute, 'c'=>$sContent]);
    }
    
}