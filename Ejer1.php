<?php 
function bubbleSort($arr)
{
    $n = sizeof($arr);    #determinano el tamanio
    for($i = 0; $i < $n; $i++)
    {
        $swapped = False;

        #los ultimos de i hipoteticamente estan en orden
        for ($j = 0; $j < $n - $i - 1; $j++)
        {
            
            #vamos desde 0 hasta n-i-1
            if ($arr[$j] < $arr[$j+1]) #solo invertimos aca, creo
            {
                $t = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $t;
                $swapped = True;
            }
        }

        #si nada se mueve, hasta ac
        if ($swapped == False)
            break;
    }
    return $arr;
}
        
$arr = [64, 34, 25, 12, 22, 11, 90,-100,25]; 
$len = sizeof($arr);
print_r(bubbleSort($arr));


