<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$filename = 'csv.csv';
header('Content-Type:application/force-download');
header('Content-Disposition: attachment; filename="'.basename($filename).'";');
header('Content-Length:'.@filesize($filename));
@readfile($filename)or die('File not found.');          


?>

