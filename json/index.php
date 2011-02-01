<?php
	echo "[{\"url\":\"http://".$_SERVER["HTTP_HOST"].$_SERVER['REQUEST_URI']."\", \"length\" : ".(strlen("http://".$_SERVER["HTTP_HOST"].$_SERVER['REQUEST_URI']))."}]";
?>