<?php
namespace Pax;

abstract class Responder{

	private $sID = 'task';

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

	private $aTasks = array();

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
	 * @param array $aParams Parameters to be forwarded to the action
	 * @param String $sAction Name of the action you want to add
	 */
	protected function addTask(array $aParams = [], $sAction=null){
		$this->aTasks[$this->getID()][] = new Task((is_null($sAction)?debug_backtrace()[1]['function']:$sAction), (count($aParams)?$aParams:debug_backtrace()[1]['args']));
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