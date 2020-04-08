<?php
require_once '../vendor/autoload.php';
use App\Wcs\Hello;
use HelloWorld\SayHello;


$ok = new \App\Wcs\Hello();

echo $ok->talk();

$root = $_SERVER['DOCUMENT_ROOT'];

$loader = new Twig\Loader\FilesystemLoader( __DIR__ . '/../src/views');
$twig = new Twig\Environment($loader);


$products = ['product1', 'product2', 'product3', 'product4', 'product5'];


echo $twig->render('index.html.twig', ['products' => $products]);

$package = new SayHello();

echo $package->world();
