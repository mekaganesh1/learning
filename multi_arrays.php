<?php
error_reporting(0);
$result = array();

/*$Arr1 = array(1=>array('x'=>1),
			2=>array('x'=>2),
			4=>array('x'=>3),
);
$Arr2 = array(1=>array('y'=>1),
			2=>array('y'=>2),
			3=>array('y'=>2),
			4=>array('y'=>2),
			5=>array('y'=>3),
			6=>array('y'=>4),
			7=>array('y'=>3),
			8=>array('y'=>6),
			9=>array('y'=>7),
			10=>array('y'=>8),
);*/

		##### OR #####

//X array
$Arr1[1]['x'] = 1;
$Arr1[2]['x'] = 2;
$Arr1[4]['x'] = 3;

// Y array
$Arr2[1]['y'] = 1;
$Arr2[2]['y'] = 2;
$Arr2[3]['y'] = 2;
$Arr2[4]['y'] = 3;
$Arr2[5]['y'] = 2;
$Arr2[6]['y'] = 2;
$Arr2[7]['y'] = 3;
$Arr2[8]['y'] = 3;
$Arr2[9]['y'] = 4;
$Arr2[10]['y'] = 5;
$resArr = array_intersect_assoc($Arr2,$Arr1);

// echo "<pre>";
// print_r($Arr1);
// echo '<hr/>';
// print_r($Arr2);
// echo '<hr/>';
// print_r($resArr);
// echo "</pre>";

foreach($Arr1 as $k1 => $arr){
	foreach($resArr as $k2 => $ar1){
		if($ar1['y'] == $arr['x']){
			$result[$k1][] = $k2;
		}
	}
}
echo "<pre>";print_r($result);echo "</pre>";exit;
?>
