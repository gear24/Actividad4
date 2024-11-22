<?php

function insertionSort($arr){
    if(count($arr) <= 1) return " Necesito al meos 2 datos en el array";

    for ($i = 1; $i <count($arr);$i++){
        $key = $arr[$i];
        $j = $i-1;
#taba joya pero devolvia PHP Warning:  Undefined array key -1 in ...
        while($j >= 0 && $arr[$j] >$key){
            $arr[$j+1] = $arr[$j];
            $j -=1;

            
        }
        $arr[$j+1] = $key;
    }
    return $arr;
}

$arr = ['bravo', 'charlie', 'quebec', 'alfa', 'delta'];
echo "Array antes de ordenamiento: \n";
print_r($arr);
echo "Array despues de ordenamiento: \n";
print_r(insertionSort($arr));