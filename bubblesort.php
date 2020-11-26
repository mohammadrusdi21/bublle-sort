<?php
 
function print_array($array){
 
	foreach($array as $data){
		echo '<div style="padding:5px 0;width:30px;float:left;text-align:center;border:1px solid #ccc;vertical-align:middle">'.$data.'</div>';
	}
   
	echo '<div style="clear:both"></div>';
}
 
 
$acak = array(87,1,27,8,4,11,10,9,3,12,34,55,66,5,1);
 
print_array($acak);
 
echo '<br />';
 
for($i=1; $i < count($acak) ; $i++){
	for($j = count($acak)-1 ; $j>=$i; $j--){
		if($acak[$j] < $acak[$j-1]){
		$temp 	= $acak[$j];
		$acak[$j] 	= $acak[$j-1];
		$acak[$j-1] = $temp;
		}
	}
	print_array($acak);
}
 
echo '<br />';
 
print_array($acak);
 
 
?>