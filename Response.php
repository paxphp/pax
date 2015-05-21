<?php
namespace Pax;

use Pax\Tasks as t;
use Pax\Tasks\AbstractTask;

class Response extends Responder{
	
	public function bind($sDestination, $sEvent, $sFunction){
		$this->addTask(['d'=>$sDestination, 'e'=>$sEvent,'f'=>$sFunction]);
		return $this;
	}
	public function unbind($sDestination, $sEvent){
		$this->addTask(['d'=>$sDestination, 'e'=>$sEvent]);
		return $this;
	}
	public function html($sDestination, $sContent){
		$this->addTask(['d'=>$sDestination, 'c'=>$sContent], 'html');
		return $this;
	}
	public function append($sDestination, $sContent){
		$this->addTask(['d'=>$sDestination, 'c'=>$sContent]);
		return $this;
	}
	public function prepend($sDestination, $sContent){
		$this->addTask(['d'=>$sDestination, 'c'=>$sContent]);
		return $this;
	}
	public function before($sDestination, $sContent){
		$this->addTask(['d'=>$sDestination, 'c'=>$sContent]);
		return $this;
	}
	public function after($sDestination, $sContent){
		$this->addTask(['d'=>$sDestination, 'c'=>$sContent]);
		return $this;
	}
	public function attr($sDestination, $sAttribute, $sContent){
		$this->addTask(t\AttrTask::create($sDestination, $sAttribute, $sContent));
		return $this;
	}
	public function console($sContent){
		$this->addTask();
		return $this;
	}
	public function alert($sContent){
	    $this->addTask(t\AlertTask::create($sContent));
	    return $this;
	}
	public function script($sContent){
		$this->addTask(['c'=>$sContent]);
		return $this;
	}
	public function _debug($args){
		$this->addTask();
		return $this;
	}
	public function css($sDestination, $sPropertyName, $sValue){
		$this->addTask(['d'=>$sDestination, 'p'=>$sPropertyName, 'v'=>$sValue]);
		return $this;
	}
	public function addClass($sDestination, $sClassName){
		$this->addTask(['d'=>$sDestination, 'c'=>$sClassName]);
		return $this;
	}
	public function removeClass($sDestination, $sClassName=null){
		$this->addTask(['d'=>$sDestination, 'c'=>$sClassName]);
		return $this;
	}
	public function remove($sDestination){
	    $this->addTask(['d'=>$sDestination]);
	    return $this;
	}
	public function toggle($sDestination){
	    $this->addTask(['d'=>$sDestination]);
	    return $this;
	}
	public function show($sDestination){
	    $this->addTask(['d'=>$sDestination]);
	    return $this;
	}
	public function hide($sDestination){
	    $this->addTask(['d'=>$sDestination]);
	    return $this;
	}
	public function replaceWith($sDestination, $sContent=null){
	    $this->addTask(['d'=>$sDestination, 'c'=>$sContent]);
	    return $this;
	}
	public function when($condition, AbstractTask $true, AbstractTask $false = NULL){
	    $this->addTask(t\WhenTask::create($condition, $true, $false));
	    return $this;
	}
}