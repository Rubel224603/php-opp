<?php


namespace App\classes;

class HelloWorld {
        public $message;
        public  $firstName, $lastName, $fullName,$x ,$y,$z, $data = [], $student = [];
    
        public function __construct(){
            $this->message ="Hello World";

        }

        public function index(){
            $this->x= 10;
            $this->y= 20;
            $this->z =  $this->x  +  $this->y;
            // echo $this->z;
            $this->data = [10,20,30,40,"Rubel",false,22.332];
            // echo $this->data[1];

            foreach($this->data as $item){

               // echo $item ." ";

            }

            $this->students =[
                0 => [
                    'name'  => "Rubel",
                    'email' => 'cserubelhosen@gmail.com', 
                    'number'=> '018552521412'
                ],
                1 => [
                    'name'  => "Shaki",
                    'email' => 'shakil@gmail.com', 
                    'number'=> '02564310203'
                ],
                2 => [
                    'name'  => "Nasri",
                    'email' => 'nasir@gmail.com', 
                    'number'=> '01950383541'
                ]
            ];

            //echo $this->students[1]['number'];

            // foreach($this->students as $studentsData){

            //     echo $studentsData['name']." <br> ". $studentsData['email'].' <br> '. $studentsData['number']."<br>";
            // }
         
          
            $students = $this->students;
            include "views/home.php";
         }
}