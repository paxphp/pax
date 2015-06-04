<?php
namespace Pax\Tasks;

class HtmlTask extends AbstractTask{
    
    static public function create($sDestination, $sContent){
        return self::init(['d'=>$sDestination, 'c'=>$sContent]);
    }
    
}