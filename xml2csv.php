<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>XML to CSV</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="main">
<?php

require_once('functions.php');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$plik = $_FILES['file'];
$plik_tmp = $_FILES['file']['tmp_name'];
$plik_nazwa = $_FILES['file']['name'];
$plik_rozmiar = $_FILES['file']['size'];
$upload = 'upload/'.$plik_nazwa;
$uri = 'http://xml2csv.warszawa.pl/'.$upload;

if(is_uploaded_file($plik_tmp)) {
    
    if($plik['type'] == 'text/xml')
    {
    move_uploaded_file($plik_tmp, $upload);
    echo "File: <strong>$plik_nazwa</strong> of size 
    <strong>$plik_rozmiar bytes</strong> has been successfully uploaded to the server!";
    }
 else {
    
    echo "You uploaded wrong file.XML only!";
    echo "<br /><a href='http://xml2csv.warszawa.pl'>Go back to the main site</a>";
    exit();
    }
} 
else
{
    echo "File is missed. Try again";
    echo "<br /><a href='http://xml2csv.warszawa.pl'>Go back to main site</a>";
    exit();
    //echo $_FILES['file']['error'];
    
}

doCSV($uri);


echo "<br /><a href='download.php'>Download the CSV file !</a>";
echo "<br /><a href='http://xml2csv.warszawa.pl'>Go back to main site</a>"
?>
</div>
</body>
<div id="footer">
            <div id="foot">
                <a href='mailto:artbaxcpp@gmail.com'>&copy artur.borkowski2015</a>
            </div>
        </div> 
</html>


