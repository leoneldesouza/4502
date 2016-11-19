<?php

	echo '<pre>';

	$dt1 = new DateTime();
	print_r($dt1);
	$dt1->setDate(2017,1,1);
	$dt1->settime(18,30,15);
	print_r($dt1);

	$dt2 = new DateTime('2016-11-26 00:00:00');
	print_r($dt2);
	$dt2->modify('+ 2 days');
	print_r($dt2);

		echo '<br />';
	echo $dt1->format('d/m/y H:i:s');

	echo '<hr />';

	$dt3 = new DateTime();
	echo $dt3->format('d-m-y H:i:s');
	$dtTimeZone = new DateTimeZone('Asia/Tokyo');
	$dt3->setTimeZone($dtTimeZone);
	echo '<br />' .$dt3->format('d-md-y H:i:s');
