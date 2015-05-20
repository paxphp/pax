<?php
namespace Pax\Tasks;

class AttrTask extends AbstractTask{
    
    public function __construct($sDestination, $sAttribute, $sContent){
        parent::__construct(['d'=>$sDestination, 'a'=>$sAttribute, 'c'=>$sContent]);
    }
    
}