<?php


    // echo "hello world";

    // function demo(){

    //     echo "hello world";
    // }
    // demo();



    // class Demo{
    //     public function test(){
    //         echo"hello world";
    //     }
    // }

    //     $rubel = new Demo();
    //     echo($rubel->test()) ;

    require_once "vendor/autoload.php";
    use App\classes\HelloWorld;

    $helloWorld = new HelloWorld();
    $helloWorld->index();