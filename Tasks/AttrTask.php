<?php
namespace Pax\Tasks;

class AttrTask extends \Pax\Task{
    
    static public function create($sDestination, $sAttribute, $sContent){
        return self::init(['d'=>$sDestination, 'a'=>$sAttribute, 'c'=>$sContent]);
    }
    
}