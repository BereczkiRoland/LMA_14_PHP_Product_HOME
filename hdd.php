<?php
	class HDD extends Product{
		private $capacity=0;		//Kapacitás
		private $rpm=0;				//Fordulatszám
		private $external=false;	//Külső v. belső
		private $size=0;			//Fizikai méret
		private $connect=array();	//Csatlakozó típusa
		public function __construct($name, $price, $brand, $specification, $store, $description, $guarantee, $capacity, $rpm, $external, $size, $connect){
			parent:: __construct($name, $price, $brand, $specification, $store, $description, $guarantee);
			$this->setCapacity($capacity);
			$this->setRPM($rpm);
			$this->setExternal($external);
			$this->setSize($size);
			$this->setConnect($connect);			
			}
			
			public function getCapacity(){return $this->capacity;}
			public function getRPM(){return $this->rpm;}
			public function getExternal(){return $this->external;}
			public function getSize(){return $this->size;}
			public function getConnect(){return $this->connect;}
			
			protected function setCapacity($capacity){$this->capacity=$capacity;}
			protected function setRPM($rpm){$this->rpm=$rpm;}
			protected function setExternal($external){$this->external=$external;}
			protected function setSize($size){$this->size=$size;}
			protected function setConnect($connect){$this->connect=$connect;}
			
			//Kapacitás összehasonlító metódus
			public function CapacityEqual($HDD){
			if($this->getCapacity()>$HDD->getCapacity()){
				return $this->getCapacity();
				}else{
					return $HDD->getCapacity();
					}
			}
			
			//Fordulatszám összehasonlító metódus
			public function RPMEqual($HDD){
			if($this->getRPM()>$HDD->getRPM()){
				return $this->getRPM();
				}else{
					return $HDD->getRPM();
					}
			}	
			
			//Fizikai méret összehasonlító metódus
			public function SizeEqual($HDD){
			if($this->getSize()>$HDD->getSize()){
				return $this->getSize();
				}else{
					return $HDD->getSize();
				}
			}
			
			public function __toString(){
				return parent::__toString().
				"Kapacitás (GB):".$this->getCapacity()."<br/>".
				"Fordulatszám:".$this->getRPM()."<br/>".
				"Külső vagy belső:".$this->getExternal()."<br/>".
				"Méret:".$this->getSize()."<br/>".
				"Csatlakozó:".$this->getConnect()."<br/>";
				}
			
		}
?>