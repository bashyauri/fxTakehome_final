<?php

namespace MercuryHolidays\Search;

class Searcher
{
    public $available_rooms = array();
    public $roomsFound = array();
     

    public function add(array $property): void
    {
        $count = 0;
       
        for ($i=0; $i < count($property); $i++) { 
           
           // filter only rooms that are available     
            if ($property[$i]['Available']){
                $this->available_rooms[$i]['id'] = $property[$i]['id'];
                $this->available_rooms[$i]['Name'] = $property[$i]['Name'];
                $this->available_room[$i]['Available'] =$property[$i]['Available'];;
                $this->available_rooms[$i]['Floor'] = $property[$i]['Floor'];
                $this->available_room[$i]['Room No'] = $property[$i]['Room No'];
                $this->available_rooms[$i]['Per Room Price'] = $property[$i]['Per Room Price'];
                // echo $this->available_rooms[$i]['Name'].' '. $this->available_rooms[$i]['Per Room Price'].' '.$this->available_rooms[$i]['Floor'];
                // echo "\n";
                
            }
          
        }
      
       
      
        
    }

    
    public function search(int $roomsRequired, $minimum, $maximum):array
    {
        $count = 0;
      
        $rooms = array(); 
        // insert only rooms that are available into an array
        foreach ($this->available_rooms as $key => $value) {
          $this->roomsFound[$count] = $value;
          $count+=1;
        }
        $counter= 0;
        // filter on rooms that are within the price specified
       while ($counter < count($this->roomsFound)) { 
        if ( $this->roomsFound[$counter]['Per Room Price'] >= $minimum  && $this->roomsFound[$counter]['Per Room Price'] <= $maximum){
            $rooms[$counter]['Name'] = $this->roomsFound[$counter]['Name'];
            $rooms[$counter]['Floor'] = $this->roomsFound[$counter]['Floor'];
            $rooms[$counter]['Per Room Price'] = $this->roomsFound[$counter]['Per Room Price'];
           
        }
        $counter+=1;   
           
       }
      
       return $rooms;
       
        
    }
  
}
// Mock multidimentional array 
$hotels = [
    ['id'=>1,'Name'=>'Hostel A','Available'=>False,'Floor'=>1,'Room No'=>1,'Per Room Price'=>25.80],
    ['id'=>2,'Name'=>'Hostel A','Available'=>False,'Floor'=>1,'Room No'=>2,'Per Room Price'=>25.80],
    ['id'=>3,'Name'=>'Hostel A','Available'=>True,'Floor'=>1,'Room No'=>3,'Per Room Price'=>25.80],
    ['id'=>4,'Name'=>'Hostel A','Available'=>True,'Floor'=>1,'Room No'=>4,'Per Room Price'=>25.80],
    ['id'=>5,'Name'=>'Hostel A','Available'=>False,'Floor'=>1,'Room No'=>5,'Per Room Price'=>25.80],
    ['id'=>6,'Name'=>'Hostel A','Available'=>False,'Floor'=>2,'Room No'=>6,'Per Room Price'=>30.10],
    ['id'=>7,'Name'=>'Hostel A','Available'=>True,'Floor'=>2,'Room No'=>7,'Per Room Price'=>35.00],
    ['id'=>8,'Name'=>'Hostel B','Available'=>True,'Floor'=>1,'Room No'=>1,'Per Room Price'=>45.80],
    ['id'=>9,'Name'=>'Hostel B','Available'=>False,'Floor'=>1,'Room No'=>2,'Per Room Price'=>45.80],
    ['id'=>10,'Name'=>'Hostel B','Available'=>True,'Floor'=>1,'Room No'=>3,'Per Room Price'=>45.80],
    ['id'=>11,'Name'=>'Hostel B','Available'=>True,'Floor'=>1,'Room No'=>4,'Per Room Price'=>45.80],
    ['id'=>12,'Name'=>'Hostel B','Available'=>False,'Floor'=>1,'Room No'=>5,'Per Room Price'=>45.80],
    ['id'=>13,'Name'=>'Hostel B','Available'=>False,'Floor'=>2,'Room No'=>6,'Per Room Price'=>49.80],
    ['id'=>14,'Name'=>'Hostel B','Available'=>False,'Floor'=>2,'Room No'=>7,'Per Room Price'=>49.80]];
$search =new Searcher();
$search->add($hotels);
$rooms = $search->search(2,25,40);


foreach ($rooms as $key => $value) {
    echo $rooms[$key]['Name'].' '.$rooms[$key]['Floor'].' '.$rooms[$key]['Per Room Price']."\n";
    
}