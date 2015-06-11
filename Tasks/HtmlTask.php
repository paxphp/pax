<?php
namespace Pax\Tasks;

class HtmlTask extends \Pax\Task{
    
    static public function create($sDestination, $sContent){
        return self::init(['d'=>$sDestination, 'c'=>$sContent]);
    }
    
}