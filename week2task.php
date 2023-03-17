<?php 

$age = "19";
$pvc = "not collected"; //options are 'collected' or 'not collected'
$ward = "019";

if ($age <= 18){
	echo 'not eligible due to under-age';

}elseif($pvc != "collected"){
	echo 'not eligible due to no pvc';

}elseif($ward != "020"){
	echo 'not eligible due to wrong ward';

}else{echo 'voter eligible to vote';}

?>