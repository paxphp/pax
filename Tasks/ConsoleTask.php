<?php
namespace Pax\Tasks;

class ConsoleTask extends \Pax\Task{
    
    static public function create($sContent){
        return self::init($sContent);
    }
    
}