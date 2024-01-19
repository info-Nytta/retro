<?php
function getApi($url) {
	$json=file_get_contents($url);
	if (http_response_code()==404) return false;
	else return json_decode($json,true);
}

function minden(){
	global $apiUrl;
	$lista=getApi($apiUrl."?szerzo=mind");
	return $lista;
}
function szerzok() {
	$lista=minden();
	$sz=array();
	foreach($lista as $elem) {
		if (!in_array($elem['szerzo'],$sz)) array_push($sz,$elem['szerzo']);
	}
	return $sz;
}

function minAr(){
	$lista=minden();
	$min=PHP_INT_MAX;
	foreach ($lista as $elem) 
		if (intval($elem['ar'])<$min) $min=intval($elem['ar']);
	return intval($min);
}

function maxAr() {
	$lista=minden();
	$max=PHP_INT_MIN;
	foreach ($lista as $elem) 
		if (intval($elem['ar'])>$max) $max=intval($elem['ar']);
	return intval($max);
}
?>

