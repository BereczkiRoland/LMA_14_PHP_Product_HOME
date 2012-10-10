<?php
	class Pendrive extends Product{
		private $pendrivecapacity=0;		//Kapacitás
		private $pendriveconnect=array();	//Csatlakozó típusa
		public function __construct($name, $price, $brand, $specification, $store, $description, $guarantee, $pendrivecapacity, $pendriveconnect){
			parent:: __construct($name, $price, $brand, $specification, $store, $description, $guarantee);
			$this->setPendriveCapacity($pendrivecapacity);
			$this->setPendriveConnect($pendriveconnect);			
			}
			
			public function getPendriveCapacity(){return $this->pendrivecapacity;}
			public function getPendriveConnect(){return $this->pendriveconnect;}
			
			protected function setPendriveCapacity($pendrivecapacity){$this->pendrivecapacity=$pendrivecapacity;}
			protected function setPendriveConnect($pendriveconnect){$this->pendriveconnect=$pendriveconnect;}
			
			//Kapacitás összehasonlító metódus
			public function PendriveCapacityEqual($Pendrive){
			if($this->getPendriveCapacity()>$Pendrive->getPendriveCapacity()){
				return $this->getPendriveCapacity();
				}else{
					return $Pendrive->getPendriveCapacity();
					}
			}
			
			//Csatlakozó összehasonlító metódus
			public function PendriveConnectEqual($Pendrive){
			if($this->getPendriveConnect()>$Pendrive->getPendriveConnect()){
				return $this->getPendriveConnect();
				}else{
					return $Pendrive->getPendriveConnect();
					}
			}

			public function __toString(){
				return parent::__toString().
				"Kapacitás (GB):".$this->getPendriveCapacity()."<br/>".
				"Csatlakozó:".$this->getPendriveConnect()."<br/>";
				}
			
		}
?>