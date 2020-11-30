<?php
function UrlParameter($targ){
		return filter_input(INPUT_GET, $targ, FILTER_SANITIZE_URL);
}
?>
