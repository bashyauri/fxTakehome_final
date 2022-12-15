<?php

namespace Tests\Search;

use MercuryHolidays\Search\Searcher;

use PHPUnit\Framework\TestCase;

class SearcherTest extends TestCase
{
    // You can remove this test when it is not needed.


    public function testSearchDoesReturnEmptyArray(): void
    {

        
     
        $searcher = new Searcher();
        
       //$this->expectDeprecationMessage('Method not implemented');
        
        $this->assertEmpty($searcher->search(0, 0, 0));
       
    }
    public function testIsArray(){
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
        
        $this->assertIsArray(
            $hotels,
            "assert variable is array or not"
        );
    }
   
    
    
}