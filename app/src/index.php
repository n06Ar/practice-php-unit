<?php

require_once( __DIR__.'/CsvRelation.php');

use App\CsvRelation;

$filepath = __DIR__ . '/../../Public/Test.csv';

$array = [
    ['1',2,3.4,5],
    ['1','2',3.4,5],
    ['1','2','3.4',5],
    ['1','2','3.4','5'],
];

CsvRelation::arrayToCsv($array, $filepath);

var_dump(CsvRelation::csvToArray($filepath));
