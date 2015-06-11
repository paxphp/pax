<?php
namespace Pax\Tasks;

class WhenTask extends \Pax\Task{
    
    static public function create($condition, \Pax\Task $true, \Pax\Task $false = NULL){
        return self::init(['c'=>$condition, 't'=>$true, 'f'=>$false]);
    }
    
}