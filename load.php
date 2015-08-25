<?php
if (!isset($_POST["url"]) && !isset($_GET["url"])) {
	die();
}
if (isset($_POST["url"])) {
	$url = $_POST["url"];
}
else if (isset($_GET["url"])) {
	$url = $_GET["url"];
}
header('Content-type: text/xml');
$file = file_get_contents($url);
echo $file;
?>