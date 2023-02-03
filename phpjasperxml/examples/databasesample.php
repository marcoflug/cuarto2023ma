<?php
include "main.php";

use simitsdk\phpjasperxml\PHPJasperXML;

$filename = __DIR__ . '/report3.jrxml';


$config = [
    'driver' => 'mysql',
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'name' => 'universidad',
];

$report = new PHPJasperXML();
$report->load_xml_file($filename)
    ->setParameter(['reporttitle' => 'Database Report With Driver : ' . $config['driver']])
    ->setDataSource($config)
    ->export('Pdf');
?>