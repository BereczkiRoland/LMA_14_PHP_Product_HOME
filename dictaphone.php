<?php
	class Dictaphone extends Product{
		private $dictaphonecapacity=0;		//Kapacitás
		private $dictaphoneexpand=false;	//Bővíthető-e
		private $dictaphoneconnect=array();	//Csatlakozó típusa
		public function __construct($name, $price, $brand, $specification, $store, $description, $guarantee, $dictaphonecapacity, $dictaphoneexpand, $dictaphoneconnect){
			parent:: __construct($name, $price, $brand, $specification, $store, $description, $guarantee);
			$this->setDictaphoneCapacity($dictaphonecapacity);
			$this->setDictaphoneExpand($dictaphoneexpand);
			$this->setDictaphoneConnect($dictaphoneconnect);			
			}
			
			public function getDictaphoneCapacity(){return $this->dictaphonecapacity;}
			public function getDictaphoneExpand(){return $this->dictaphoneexpand;}
			public function getDictaphoneConnect(){return $this->dictaphoneconnect;}
			
			protected function setDictaphoneCapacity($dictaphonecapacity){$this->dictaphonecapacity=$dictaphonecapacity;}
			protected function setDictaphoneExpand($dictaphoneexpand){$this->dictaphoneexpand=$dictaphoneexpand;}
			protected function setDictaphoneConnect($dictaphoneconnect){$this->dictaphoneconnect=$dictaphoneconnect;}
			
			//Kapacitás összehasonlító metódus
			public function DictaphoneCapacityEqual($Dictaphone){
			if($this->getDictaphoneCapacity()>$Dictaphone->getDictaphoneCapacity()){
				return $this->getDictaphoneCapacity();
				}else{
					return $Dictaphone->getDictaphoneCapacity();
					}
			}
			
			//Csatlakozó összehasonlító metódus
			public function DictaphoneConnectEqual($Dictaphone){
			if($this->getDictaphoneConnect()>$Dictaphone->getDictaphoneConnect()){
				return $this->getDictaphoneConnect();
				}else{
					return $Dictaphone->getDictaphoneConnect();
					}
			}

			public function __toString(){
				return parent::__toString().
				"Kapacitás (GB):".$this->getDictaphoneCapacity()."<br/>".
				"Bővíthető-e a memória: " .$this->getDictaphoneExpand()."<br/>".
				"Csatlakozó: ".$this->getDictaphoneConnect()."<br/>";
				}
			
		}
?>