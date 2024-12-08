<?php
    function test(){
        echo "hello test";
    }

    function view($fileName,$data=[],$print=true){ 
        $output ="view not found";
        $filePath = "views/".$fileName.".php";
        if(file_exists($filePath)){
            ob_start();
            extract($data);
            include $filePath;
            $output = ob_get_clean();
        }
        if($print){
            print $output;
        }

    }















?>