<?php 

    class Fare {

        public $Age;  
        public $Distance;


        public function calculate_fare() {
            $base_fare = 8;

            $discount = 0.8; //20%discount

            if($this->Distance <= 4) {
                $total_fare = $base_fare ;   
            }else{
                $total_fare = $this->Distance +4 ; 
            }
            if($this->Age  >= 60 ){   //if Age>=60
                $total_fare *= $discount ;    
            }
           // if(
           // $this->$total_fare = (1 - $discount;) ) //Fare*20%

            return $total_fare;
        }


        //set
            public function setAge($new_Age) {
            $this->Age = $new_Age;
            }

            public function setDistance($new_Distance) {
            $this->Distance = $new_Distance;
            }


        //get

            public function getAge() {
            return $this->Age;
            }
             //Age|min10
             //Age|max80  

            public function getDistance() {
            return $this->Distance;
            }
            //if Age1=<4,Dis8km, 


    }

?>