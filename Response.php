<?php
namespace dsx\PAX;

class Response extends Responder{
	
	public function html($sDestination, $sContent){
		$this->addTask(['d'=>$sDestination, 'c'=>$sContent], 'html');
	}
	public function append($sDestination, $sContent){
		$this->addTask(['d'=>$sDestination, 'c'=>$sContent]);
	}
	public function prepend($sDestination, $sContent){
		$this->addTask(['d'=>$sDestination, 'c'=>$sContent]);
	}
	public function console($sContent){
		$this->addTask();
	}
	
}