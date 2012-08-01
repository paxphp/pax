<?php
namespace dsx\PAX;

class Response{
	
	public function __construct($sID = null){
		if(!is_null($sID))
			$this->setID($sID);
	}
	
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
	
	
	
	public function html($sDestination, $sContent){
		$this->addTask('html',['d'=>$sDestination, 'c'=>$sContent]);
	}
	
	public function append($sDestination, $sContent){
		$this->addTask('append', ['d'=>$sDestination, 'c'=>$sContent]);
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
	 * @param String $sAction Name of the action you want to add
	 * @param array $aParams Parameters to be forwarded to the action
	 */
	protected function addTask($sAction,array $aParams = array()){
		$this->aTasks[$this->getID()][] = new Task($sAction, $aParams); 
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