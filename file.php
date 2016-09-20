<?php


$arr = file('yyy.log');


$arr1 = file('xxx.log');


$re = array_diff($arr, $arr1);






print_r($re);
