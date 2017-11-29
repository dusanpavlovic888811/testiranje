<?php
function __autoload($name){
	require_once "classes/{$name}.class.php";
} 
class Human extends Monkey {
	public $jpmb;
	public $name;
	public $surname;
	public $education;
	public $nation;
	public $lie;
	private $_politicalCommitment;
	public $sincerity;
	 private $_ownership = array();
	public __construct ($dateOfBirth,$jpmg,$nation,$lie,$sincerity){
		parent::__construct($dateOfBirth);
		$this-> jpmg = $jpmg;
		$this-> nation = $nation;
		$this-> lies = 0;
		$this->sincerity=true,
	}
	public function get_name($name){
		$this->name=$name;
	}
	public function get_surname ($surname){
		$this->name=$name;
	}
	public function addOwnership($value) {
    $this->ownership[] = $value;
  }
  public function loseOwnership($value) {
	  $key = array_search('$value', $array);
	$this->unset($ownership[$key]);
  }
  public function __toString() {
	  return $this->ime . " " . $this->prezime . " " . $this->jpmg;
  }
  public function set_politicalCommitment($newpoliticalCommitment) {
	  if(is_string($newpoliticalCommitment))
		  $this->_politicalCommitment=$newpoliticalCommitment;
	  else die("stranke i pokreti moraju imati validno ime,propisano ustavom!");
  }
  public function get_politicalCommitment() {
	  return $this->_politicalCommitment;
  }
  public function __isset($name){
	  return true;
	  $this->lie++;
  }
  public function __call($name,$value){
	$params = implode(",",$value);
	return "Sposoban sam da uradim {$name} uz pomoc {$params}";
	$this->lie++;
  }
  public function set_$sincerity($lie) {
	  if($this->lie>0){
		  $sincerity=false;
	  }
	  public function fight($guns) {
		parent::fight(). " " ."with {$guns}";
	}
	
  }

}
?>