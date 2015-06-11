<?php
namespace Pax\Tasks;

class ScriptTask extends \Pax\Task{
    
    static public function create($sContent){
        return self::init(['c'=>$sContent]);
    }
    
}