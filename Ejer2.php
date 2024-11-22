<?php

function mergeSort($arr){
    if(count($arr) <= 1) return $arr;
    $mid = floor(count($arr)/2);
    $left = array_slice($arr,0,$mid);
    $right = array_slice($arr,$mid);

    $left = mergeSort($left);
    $right = mergeSort($right);

    // print_r($left);
    // print_r($right);

    return merge($left, $right);
}

function merge($left,$right){
    $result = [];
    while(count($left) > 0 && count($right )> 0){
        
        if($left[0] < $right[0]){
            array_push($result, array_shift($left));
        }else{
            array_push($result, array_shift($right));
        }
    }
    while(count($left) >0){
        array_push($result,array_shift($left));
    }

    while(count($right) >0){
        array_push($result,array_shift($right));
    }

    return $result;
}
$arr = ['bravo', 'charlie', 'quebec', 'alfa', 'delta'];
echo "Array original: \n";
print_r($arr);
echo 'Array ordenado: \n';
print_r(mergeSort($arr));