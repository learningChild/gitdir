<?php


$arr = array(1,2,'a',4,5,6,67,);

$arr = array(

  array(1,2,3,4,5,6,7,'type1','aa1',11),
  array(1,2,3,4,5,6,7,'type2','aa2',12),
  array(1,2,3,4,5,6,7,'type3','aa3',13),
  array(1,2,3,4,5,16,7,'type3','aa3',13),
  array(1,2,3,4,5,6,7,'type4','aa4',14),
  array(1,2,3,4,5,6,7,'type5','aa5',15),
  array(1,22,3,4,5,6,7,'type5','aa5',15),


);

array_filter($arr, 'filter');
print_r($arr);



function filter(&$val){
	if($val[7] == 'type3'){
		$val[7] = 'type111111';
	}

}
