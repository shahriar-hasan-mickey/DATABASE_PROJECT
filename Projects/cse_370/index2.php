<?php
	date_default_timezone_set('America/New_York');
	$nextWeek = time() + (7*24*60*60);
	echo "Now:		".date('Y-m-d')."\n";
	echo "Next week ".date('Y-m-d', $nextWeek)."\n";

	echo("======\n");

	$now = new DateTime();
	//$nextWeek = new DateTime('today + 1 week');
	$nextWeek = new DateTime('');
	echo 'Now:		'.$now->format('Y-m-d')."\n";
	echo 'Next week '.$nextWeek->format('Y-m-d')."\n";

	echo '<br/>';

	$arr = array(3, 2, 1);
	echo '<pre>';
	print_r($arr);

	echo '<br/>';

	echo "$arr[1]";

	echo '<br/>';

	foreach($arr as $key => $val){
		echo "$key => $val";
		echo '<br/>';
	}
?>