<?php
/*	@author Adam Lopez
 *		Human class... parent class for creating new, generic humans before their mutations
 */


class Human{
	// some human variables
	protected $name;
	protected $healthLevel;
	protected $magicLevel;


	protected function __construct($name, $healthLevel, $magicLevel){

		// default name of human
		$humanName = ($name ? $name : "Human");

		// default health level to 100
		$humanHealth = ($healthLevel ? $healthLevel : 100);

		// default Magic Level to 100
		$humanMagicLevel = ($magicLevel ? $magicLevel : 100);

		// setting up Human...
		try{
			$this->setName($humanName);
			$this->setHealthLevel($humanHealth);
			$this->setMagicLevel($humanMagicLevel);
		} catch (Expection $ex){
			echo "Failed to create new Human Dr. Frankenstein, because: " . $ex->getMessPowerLevel();
		}		
	}

// we will set our getters and setters 
	//public getters as follows
	public function getName(){

		return $this->name;
	}

	public function getHealthLevel(){

		return $this->healthLevel;
	}

	public function getMagicLevel(){

		return $this->magicLevel;
	}

	

	// check the health of the human
	public function healthCheck(){

		$health = $this->healthLevel;
		$status = '';

		switch(true){
			case($health >= 80):
				$status = "Alright";
				break;
			case($health < 80 && $health >= 20):
				$status = "Blah";
				break;
			case($health < 20 && $health > 0 ):
				$status = "Medic!!";
				break;
			case($health <= 0):
				$status = "Dead";
				break;
			default:
				$status = "Error"; // just to make sure parameter is right we'll put this here
				break;
		}
		return $status;
	}

	// public setters so only children can use them
	protected function setName($newName){
		if(gettype($newName) == "string"){
			$this->name = $newName;
		} else {
			throw new Exception("Name must be a string, type of " . gettype($newName) . " was sent in");
		}
		$this->name = $newName;
	}

	protected function setMagicLevel($newMagicLevel){
		if(gettype($newMagicLevel) == "integer"){
			$this->magicLevel = $newMagicLevel;
		} else {
			throw new Exception("Magic Level must be an integer, type of " . gettype($newMagicLevel) . " was set in");
		}
		$this->magicLevel = $newMagicLevel;
	}

	protected function setHealthLevel($newHealth){
		if(gettype($newHealth) == "integer"){
			$this->healthLevel = $newHealth;
		} else {
			throw new Exception("Health Level must be an integer, type of " . gettype($newHealth) . " was sent in");
		}
		$this->healthLevel = $newHealth;
	}

	

}
?>