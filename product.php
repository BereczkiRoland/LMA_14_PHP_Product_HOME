<?php
	class Product{
		private $name;				//Termék neve
		private $brand;				//Termék márka
		private $price=0;			//Termék ár
		private $specification="";	//Specifikáció
		private $store=false;		//Raktáron van?
		private $description="";	//Leírás
		private $guarantee=0;		//Garancia/hó
		
		public function __construct($name, $price, $brand, $specification, $store, $description, $guarantee){
			$this->setName($name);
			$this->setPrice($price);
			$this->setBrand($brand);
			$this->setSpecification($specification);
			$this->setStore($store);
			$this->setDescription($description);
			$this->setGuarantee($guarantee);	
			}
		
		//Get metódusok
		public function getName(){return $this->name;}
		public function getPrice(){return $this->price;}
		public function getBrand(){return $this->brand;}
		public function getSpecification(){return $this->specification;}
		public function getStore(){return $this->store;}
		public function getDescription(){return $this->description;}
		public function getGuarantee(){return $this->guarantee;}
		//Set metódusok
		protected function setName($name){$this->name=$name;}
		protected function setPrice($price){$this->price=$price;}
		protected function setBrand($brand){$this->brand=$brand;}
		protected function setSpecification($specification){$this->specification=$specification;}
		protected function setStore($store){$this->store=$store;}
		protected function setDescription($description){$this->description=$description;}
		protected function setGuarantee($guarantee){$this->guarantee=$guarantee;}
		
		//Ár összehasonlító metódus
		public function PriceEqual($Product){
			if($this->getPrice()>$Product->getPrice()){
				return $this->getPrice();
				}else{
					return $Product->getPrice();
					}
		}
		
		//Van-e raktáron összehasonlító metódus
		public function StoreEqual($Product){
			if($this->getStore()>$Product->getStore()){
				return $this->getStore();
				}else{
					return $Product->getStore();
					}
		}
		
		//Garancia összehasonlító metódus
		public function GuaranteeEqual($Product){
			if($this->getGuarantee()>$Product->getGuarantee()){
				return $this->getGuarantee();
				}else{
					return $Product->getGuarantee();
					}
		}
		
		public function __toString(){
			return 
			'Terméke neve: ' .$this->getName()."<br/>".
			'Termék ára: ' .$this->getPrice()."<br/>".
			'Termék márkája: ' .$this->getBrand()."<br/>".
			'Termék specifikációja: ' .$this->getSpecification()."<br/>".
			'Rakátoron van-e: ' .$this->getStore()."<br/>".
			'Termék leírása: ' .$this->getDescription()."<br/>".
			'Garancia: ' .$this->getGuarantee()."<br/>";
			
			}

		
		}
?>