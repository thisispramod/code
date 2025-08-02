<?php 

// Move all zeros to end of the array
$arr = [10,0,20,30,0,4,2,0,5,2,0,1];
$non_zero = [];
$count = 0;
foreach($arr as $val){
    if($val != 0){
        $non_zero []=$val;
    }else{
        $count++;
    }
}

for($i=0; $i<$count; $i++){
    $non_zero [] =0;
}

print_r ($non_zero);
