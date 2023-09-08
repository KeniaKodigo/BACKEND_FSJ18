<?php

#clase Padre
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

    public function dataAnalysis(){
        throw new Exception("");
    }
}

$frontEnd = new FrontEndDeveloper();
$frontEnd->code(); //
$frontEnd->unitTest();


#clase abstracta / interface

interface TaskFront{
    public function design();
    
}

interface TaskBackend{
    public function code();
}

interface TaskTest{
    public function unitTest();
}

/**
 * PHP no existe la herencia multiple
 * en PHP podemos implementar varias interfaces
 */

class FullStack implements TaskFront, TaskBackend, TaskTest{

    public function code()
    {
        
    }

    public function design()
    {
        
    }

    public function unitTest()
    {
        
    }
}

class FrontEnd implements TaskFront, TaskBackend{

    public function design()
    {
        
    }

    public function code()
    {
        
    }
}

class Backend implements TaskBackend{
    public function code(){

    }
}


?>