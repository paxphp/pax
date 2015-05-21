<?php
namespace Pax\Tasks;

class ConsoleTask extends AbstractTask{
    
    static public function create($sContent){
        return self::init($sContent);
    }
    
}