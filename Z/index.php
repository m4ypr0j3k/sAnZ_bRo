<?php
function keygen($length=10)
{
	$key = '';
	list($usec, $sec) = explode(' ', microtime());
	mt_srand((float) $sec + ((float) $usec * 100000));
   	$inputs = array_merge(range('z','a'),range(0,9),range('A','Z'));
   	for($i=0; $i<$length; $i++)
	{
   	    $key .= $inputs{mt_rand(0,70)};
	}
	return $key;
echo keygen(40)
 
// tambahkan 
// echo keygen(40) untuk mendapatkan hasil
}
?>
