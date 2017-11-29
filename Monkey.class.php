<?php
interface Iinterfejs {
	public function breathing();
	public function eat();
	public function sleeping();
	public function toDie();
	public function drinking();
}
class Monkey implements Iinterfejs {
	public $dateOfBirth;
	public $height;
	public $weight;	
	public $status;
	public __construct($dateOfBirth){
		$this->dateOfBirth=$dateOfBirth;
	}
	public function get_height($height){
		$this->height=$height;
	}
public function get_weight($weight){
		$this->weight=$weight;
	}
	public function get_status($status){
		$this->status=$status;
	}
	public function breathing() {
		return true;
	}
	public function eat() {
		return true;
	}
	public function sleeping() {
		return true;
	}
	public function toDie() {
		return true;
	}
	public function drinking() {
		return true;
	}
	public function sex() {
		return true;
	}
	public function fight() {
		return "They are fitght";
	}
	public function playing() {
		return true;
	}
	function __destruct() {
       return "it is ower";
   }
	
	
}
 
?>