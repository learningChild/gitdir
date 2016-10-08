<?php
 

//echo calc(3);


// 比如说C 5, 3    5*4*3/2


//传入俩参数, 5和3   $x是5 基数, $y是3 取的个数

function calc($x, $z){
    if($x <= $z){
        return $z;
    }
    return $x * calc($x-1, $z);
}

function test($x, $y){
    $z = $x - $y +1;
    return calc($x, $z)/$y;
}

echo test(5, 2);