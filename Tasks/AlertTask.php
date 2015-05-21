<?php
namespace Pax\Tasks;

class AlertTask extends AbstractTask{
    
    static public function create($sContent){
        return self::init([$sContent]);
    }
    
}