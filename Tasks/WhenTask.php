<?php
namespace Pax\Tasks;

class WhenTask extends AbstractTask{
    
    public function __construct($condition, AbstractTask $true, AbstractTask $false = NULL){
        parent::__construct(['c'=>$condition, 't'=>$true, 'f'=>$false]);
    }
    
}