<?php

use jsonstatPhpViz\Reader;
use jsonstatPhpViz\RendererTable;

require_once '../vendor/autoload.php';

$filename = 'knjige.json';
$json = file_get_contents($filename);
$jsonstat = json_decode($json);

$reader = new Reader($jsonstat);
$table = new RendererTable($reader,3);
$html = $table->render();
echo $html;
