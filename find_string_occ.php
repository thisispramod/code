<?php 
// find the occ of each character from given string without using built in function 

// $string = "programming";

// // length find 

// $length = 0; 

// while(isset($string[$length])){
//     $length++;
// }

// $hasmap = [];

// for($i = 0; $i< $length; $i++){
//     if(isset($hasmap[$string[$i]])){
//         $value = $hasmap[$string[$i]];
//         $hasmap [$string[$i]] = $value+1; 
//     }else{
//         $hasmap [$string[$i]] = 1; 
//     }
// }

// print_r ($hasmap);

// find the occ of each character from given string without using built in function 

$string = "programming";

// find length 

while(isset($string[$length])){
    $length++;
}

$hasmap =[];
for($i=0; $i< $length; $i++){
    if(isset($hasmap[$string[$i]])){
        $value = $hasmap[$string[$i]];
        $hasmap[$string[$i]] = $value+1;
    }else{
        $hasmap [$string[$i]] = 1;
    }
}

//let see the output 

print_r ($hasmap);