<?php
namespace Pax;

abstract class Responder{
    
    public function __construct($sResponseID = 'pax'){
        $this->setID($sResponseID);
    }

	private $sID;

	/**
	 *    Set the sID value
	 *    @param String $sID
	 */
	public function setID($sID) {
		$this->sID = $sID;
	}

	/**
	 *    Returns the sID value.
	 *    @return String
	 */
	public function getID() {
		return $this->sID;
	}

	private $aTasks = [];

	/**
	 *    Set the tasks array
	 *    @param Array $aTasks
	 */
	protected function setTasks($aTasks) {
		$this->aTasks = $aTasks;
	}

	/**
	 *    Returns the tasks array.
	 *    @return Array
	 */
	protected function getTasks() {
		return $this->aTasks;
	}

	/**
	 * Adds a new tasks to the tasks array
	 * @param mixed $aParams Parameters to be forwarded to the action
	 * @param String $sAction Name of the action you want to add
	 * @return Task
	 */
	protected function addTask($mParams = [], $sAction=null){
	    if(is_object($mParams) && get_parent_class($mParams) == 'Pax\Task'){
	        $this->aTasks[$this->getID()][$mParams->_id] = $mParams;
	        return $mParams;
	    }elseif(is_array($mParams)){
	        $oTask = \Pax\Task::create();
	        $oTask->_do = (is_null($sAction)?debug_backtrace()[1]['function']:$sAction);
	        $oTask->applyParams((count($mParams)?$mParams:debug_backtrace()[1]['args']));
	        $this->aTasks[$this->getID()][$oTask->_id] = $oTask;
            return $oTask;
	    }
	}

	/**
	 * Removes a task from the stack
	 * @param id|Task $TaskId
	 */
	protected function removeTask($TaskId){
	    if(is_object($TaskId))
            $TaskId = $TaskId->_id;
	    if(isset($this->aTasks[$this->getID()][$TaskId]))
            unset($this->aTasks[$this->getID()][$TaskId]);
	}

	/**
	 * Returns the JSON encoded string of the tasks array
	 * @return String
	 */
	public function fetch(){
		return json_encode($this->aTasks, JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_HEX_AMP);
	}

	/**
	 * Echos the JSON encoded string of the tasks array
	 */
	public function respond(){
		echo $this->fetch();
	}

	/**
	 * Echos the JSON encoded string of the tasks array and quits the script
	 */
	public function answer(){
		die($this->respond());
	}

}