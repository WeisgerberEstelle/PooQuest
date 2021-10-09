<?php 
    require_once 'Vehicle.php';

    class Truck extends Vehicle
    {        
        private int $stock;

        private int $nbPackage = 0;

        private string $energy; 

        public function __construct(string $color, int $nbSeats, string $energy, int $stock)    
        {    
            parent::__construct($color, $nbSeats);     
            $this->energy = $energy; 
            $this->stock = $stock;   
        }
        
        public function getEnergy(): string    
        {    
            return $this->energy;
    
        }    
    
        public function setEnergy(string $energy): string
        {
                $this->energy = $energy;
        
        }   
    
        public function getStock(): int    
        {    
            return $this->stock;
    
        }    
    
        public function setStock(int $stock): int    
        {    
            $this->stock = $stock;
    
        }

        public function getNbPackage(): int    
        {    
            return $this->nbPackage;
    
        }    
    
        public function setNbPackage(int $nbPackage): void   
        {    
            $this->nbPackage = $nbPackage;
    
        }

        public function isFulled(int $nbPackage): string
        {
            $sentence = "";
            
            if($this->nbPackage === $this->stock) {

                $sentence.= 'full';

            } else {

                $sentence.= 'in filling';
            }

            return $sentence;
        }
    }   
    

?>   
