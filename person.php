<?php 
	class Person{
		public $publicName;
		protected $protectedBirth;
		private $privateGender = 'private';


		function printHello(){
			echo $this->publicName;
			echo $this->$protectedBirth;
			echo $this->$privateGender;
		}
		//getters
		function getName(){
			return $this->publicName;
		}
		function getGender(){
			return $this->privateGender;
		}
		function getBirth(){
			return $this->protectedBirth;
		}
		

		//setters
		function setName($name){
			$this->publicName = $name;
		}

		function setGender($gender)
		{
			$this->privateGender = $gender;
		}

		function setBirth($birth){
			$this->protectedBirth = $birth;
		}

		function displayGender(){
			echo $this->privateGender;
		}

	} // end of class

	$obj = new Person();
	echo $obj->publicName; // Works
	// echo $obj->protectedBirth; // Fatal Error
	// echo $obj->privateGender; // Fatal Error
//	$obj->printHello(); // Shows Public, Protected and Private
	$name = 'Vinces';
	$gender = 'Male';
	$birth = 'june 1 2000';
	$obj->setName($name);
	$obj->setGender($gender);
 	$obj->setBirth($birth);
	
 	echo "---------------<br>";
		echo $obj->getName()."<br>";
	echo $obj->getBirth()."<br>";
	echo $obj->getGender()."<br>";
	echo $obj->displayGender();

	$id = uniqid();
	echo "<br>".$id;

 ?>