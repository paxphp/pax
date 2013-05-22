<?php
namespace Dsx\Pax;

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
		$this->addTask(['d'=>$sDestination, 'a'=>$sAttribute, 'c'=>$sContent]);
		return $this;
	}
	public function console($sContent){
		$this->addTask();
		return $this;
	}
	public function alert($sContent){
		$this->addTask();
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
}