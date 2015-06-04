<?php
namespace Pax\Tasks;

class ScriptTask extends AbstractTask{
    
    static public function create($sContent){
        return self::init(['c'=>$sContent]);
    }
    
}