<?php 
App::uses('HttpSocket', 'Network/Http');
	$HttpSocket = new HttpSocket();
	// string query
	$results = $HttpSocket->get('http://www.google.com/search', 'q=cakephp');
	// array query
	echo $results;
	$results = $HttpSocket->get('http://www.google.com/search', array('q' => 'cakephp'));
	echo $results;
?>