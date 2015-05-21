<?php
namespace Pax\Tasks;

class WhenTask extends AbstractTask{
    
    static public function create($condition, AbstractTask $true, AbstractTask $false = NULL){
        return self::init(['c'=>$condition, 't'=>$true, 'f'=>$false]);
    }
    
}