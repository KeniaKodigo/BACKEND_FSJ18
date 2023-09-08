<?php

//interfaces / clase abstracta

interface animalAcuatico{
    public function nadar();
}

interface animalVolador{
    public function volar();
}

interface animalTerrestres{
    public function caminar();
}

class Pinguino implements animalAcuatico, animalTerrestres{
    public function nadar()
    {
        
    }

    public function caminar()
    {
        
    }
}

class Serpiente implements animalAcuatico{
    public function nadar()
    {
        
    }
}


?>