<?php

class TaskDeveloper{

    public function code(){
        //code..
    }

    public function unitTest(){
        //code..
    }

    public function dataAnalysis(){
        //code..
    }

    public function design(){
        //code..
    }
}

class FrontEndDeveloper extends TaskDeveloper{

    public function unitTest(){
        throw new Exception("Unable to perform the test action");
    }
}


?>