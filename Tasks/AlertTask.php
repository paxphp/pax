<?php
namespace Pax\Tasks;

class AlertTask extends \Pax\Task{
    
    static public function create($sContent){
        return self::init([$sContent]);
    }
    
}