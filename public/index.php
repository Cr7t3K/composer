<?php
require_once '../vendor/autoload.php';
use App\Wcs\Hello;

$ok = new \App\Wcs\Hello();

echo $ok->talk();