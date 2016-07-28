<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function doCSV($plik)
{
$list = array();
$counter = 0;
$reader = new XMLReader;
$reader->open($plik);
while($reader->read()) {
	if($reader->nodeType == XMLReader::ELEMENT) {
		$name = $reader->name;
	}
	
	if($reader->nodeType == XMLReader::ELEMENT && 
	$reader->name == 'towar')
	{
		$list[$counter] = array();
	}
    
	if($reader->nodeType == XMLReader::TEXT || 
	   $reader->nodeType == XMLReader::CDATA)
	{
		
		
		switch($name) {
			case 'kod':
			     $list[$counter][$name] = $reader->value;
			    
			case 'nazwa':
			     $list[$counter][$name] = $reader->value;
				
				break;
			case 'cena_detal';
			     $list[$counter][$name] = $reader->value;
				
				break;
			case 'stan_magazynu':
			    $list[$counter][$name] = $reader->value;
				
				break;
			
		}
		
	}
	
	if($reader->nodeType == XMLReader::END_ELEMENT && 
	$reader->name == 'towar')
	{
		$counter++;
	}
	
}

     if (count($list) == 0) {
     return null;
     }
       ob_start();
       $df = fopen("csv.csv", 'w');
       fputcsv($df, array_keys(reset($list)));
       foreach ($list as $row) {
             fputcsv($df, $row);
        }
       fclose($df);
       return ob_get_clean();
}
?>
