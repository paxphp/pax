<?php
namespace Pax;

class Task{

	public function __construct($sAction, array $aParams = []){
		$this->_id = uniqid('pax_', true);
		$this->_do = $sAction;
		$this->applyParams($aParams);
	}
	
	protected function applyParams(array $aParams){
		foreach ($aParams as $aAttribute => $mValue){
			$this->$aAttribute = $mValue;
		}
	}
	
	public function __isset($sAttribute){
		if(isset($this->$sAttribute))
			return true;
		return false;
	}
	
	public function __get($sAttribute){
		if(isset($this->$sAttribute)){
			return $this->$sAttribute;
		}
		return null;
	}
	
	public function __set($sAttribute, $mValue){
		$this->$sAttribute = $mValue;
	}
	
}