<?php

require __DIR__.'/autoload.php';

use Scripts\InputValues\Origin;
use Scripts\InputValues\Listing;

if(count($argv) === 3) {
    $folder = $argv[1];
    $name = $argv[2];

    $html = new Origin($folder);
    $allHtml = $html->getAllHtml();

    $list = new Listing($allHtml);
    $list->setInputsName($name);
    $list->createList();
    $list->makeFile();
}
