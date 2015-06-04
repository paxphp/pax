<?php
namespace Pax;

use Pax\Tasks as t;

class Response extends Responder{
	
    /**
     * Alternative way of adding tasks
     * 
        public function replaceWith($sDestination, $sContent=null){
            $this->addTask(['d'=>$sDestination, 'c'=>$sContent]);
            return $this;
        }
        
    **/
    
	public function bind($sDestination, $sEvent, $sFunction){
		$this->addTask(t\BindTask::create($sDestination, $sEvent, $sFunction));
		return $this;
	}
	public function unbind($sDestination, $sEvent){
		$this->addTask(t\UnbindTask::create($sDestination, $sEvent));
		return $this;
	}
	public function html($sDestination, $sContent){
		$this->addTask(t\HtmlTask::create($sDestination, $sContent));
		return $this;
	}
	public function append($sDestination, $sContent){
		$this->addTask(t\AppendTask::create($sDestination, $sContent));
		return $this;
	}
	public function prepend($sDestination, $sContent){
		$this->addTask(t\PrependTask::create($sDestination, $sContent));
		return $this;
	}
	public function before($sDestination, $sContent){
		$this->addTask(t\BeforeTask::create($sDestination, $sContent));
		return $this;
	}
	public function after($sDestination, $sContent){
		$this->addTask(t\AfterTask::create($sDestination, $sContent));
		return $this;
	}
	public function attr($sDestination, $sAttribute, $sContent){
		$this->addTask(t\AttrTask::create($sDestination, $sAttribute, $sContent));
		return $this;
	}
	public function console($sContent){
		$this->addTask(t\ConsoleTask::create($sContent));
		return $this;
	}
	public function alert($sContent){
	    $this->addTask(t\AlertTask::create($sContent));
	    return $this;
	}
	public function script($sContent){
		$this->addTask(t\ScriptTask::create($sContent));
		return $this;
	}
	public function _debug($args){
		$this->addTask();
		return $this;
	}
	public function css($sDestination, $sPropertyName, $sValue){
		$this->addTask(t\CssTask::create($sDestination, $sPropertyName, $sValue));
		return $this;
	}
	public function addClass($sDestination, $sClassName){
		$this->addTask(t\AddClassTask::create($sDestination, $sClassName));
		return $this;
	}
	public function removeClass($sDestination, $sClassName = NULL){
		$this->addTask(t\RemoveClassTask::create($sDestination, $sClassName));
		return $this;
	}
	public function remove($sDestination){
	    $this->addTask(t\RemoveTask::create($sDestination));
	    return $this;
	}
	public function toggle($sDestination){
	    $this->addTask(t\ToggleTask::create($sDestination));
	    return $this;
	}
	public function show($sDestination){
	    $this->addTask(t\ShowTask::create($sDestination));
	    return $this;
	}
	public function hide($sDestination){
	    $this->addTask(t\HideTask::create($sDestination));
	    return $this;
	}
	public function replaceWith($sDestination, $sContent = NULL){
	    $this->addTask(t\ReplaceWithTask::create($sDestination, $sContent));
	    return $this;
	}
	public function when($condition, t\AbstractTask $true, t\AbstractTask $false = NULL){
	    $this->addTask(t\WhenTask::create($condition, $true, $false));
	    return $this;
	}
}