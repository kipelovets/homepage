<?php

require_once(__DIR__.'/vendor/autoload.php');

$data = yaml_parse_file(__DIR__.'/data.yml');

$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/templates/');
$twig = new \Twig\Environment($loader);

$template = $twig->load('index.twig');
file_put_contents(__DIR__.'/public/index.html', $template->render($data));

echo "Done.";