<?php 

 // Find the first and second largest element from an array 
//  without using inbuilt function 

$arr = [10, 33,16,-30,5, 20, 8]; 


function findTwolargestelement($arr){
    $first = $second = PHP_INT_MIN; // -95942342392392
    //iteration for checking all number
    foreach($arr as $num){
        if($num > $first){
            $second = $first;
            $first = $num;
        }elseif($num > $second && $num !=$first){
            $second = $num;
        }
    }
    echo "largest $first , second Largest:  $second";
}

echo findTwolargestelement($arr);




































function findTwoLargest($arr) {
    $first = $second = PHP_INT_MIN;

    foreach ($arr as $num) {
        if ($num > $first) {
            $second = $first;
            $first = $num;
        } elseif ($num > $second && $num != $first) {
            $second = $num;
        }
    }

    echo "Largest: $first, Second Largest: $second";
}

$arr = [10, 5, 20, 8];
findTwoLargest($arr);

?>