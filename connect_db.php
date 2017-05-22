<?php

$mysqli = new MySQLi("localhost", "root","", "carrocompras");

if ($mysqli -> connect_errno) {
	die(  "<script>location.href='404.html'</script>");
}

?>