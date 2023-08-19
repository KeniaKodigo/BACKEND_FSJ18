<?php

$numero2 = 356;
$suma = 0;
for($i = 0; $i < count($numero2); $i++){
    $suma += $numero[$i];
    
    if(count($suma) > 1){
        for($i = 0; $i < count($suma); $i++){
            $suma += $numero[$i];
            
            if(count($suma) > 1){
                for($i = 0; $i < count($suma); $i++){
                    $suma += $numero[$i];
                    
                    if(count($suma) > 1){
                        
                    }
                }
            }
        }
    }else{
        return $suma;
    }
}

//356
function singleNumber($numero){
    $suma = 0;
    for($i = 0; $i < count($numero); $i++){
        $suma += $numero[$i];
        //$suma = 14;
        //suma = 5
        if(count($suma) > 1){
            singleNumber($suma);
        }else{
            return $suma;
        }
    }
}
?>