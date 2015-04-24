<?php
include_once "../scssphp/scss.inc.php";

$scss = new scssc();
$scss->setFormatter("scss_formatter_compressed");
$server = new scss_server(__DIR__, null, $scss);
$server->serve();