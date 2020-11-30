<?php
	function GetPost($typeofthing, $thingto){
		if ($typeofthing == 'GET'){
			return $_GET[$thingto];
		}elseif ($typeofthing == 'POST'){
			return $_POST[$thingto];
		};
	};
?>
