<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>XML to CSV</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="header">
            This solution is temporary.
            This is just simply converter for xml files dedicated to the specialty xml files.
            The result of conversion is csv file.
            Conditions:
            The parser is looking for a towar at first.
            If the towar is found, next one are:  kod, nazwa, cena_detal, stan magazynu. 
            The conditions can be simply changed if they don't match to the search criteria.
        </div>
        <div id="main">
            <div id="form">
                <form enctype="multipart/form-data" action="xml2csv.php" method="post">
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000000000" /> 
                    <input type="file" name="file" size="32" class="input" /><br />
                    <input type="reset" name="reset" class="reset" />
                    <input type="submit" value="submit" class="submit" />
                    
                </form>
            </div>
        </div>
        <div id="footer">
            <div id="foot">
                <a href='mailto:artbaxcpp@gmail.com'>&copy artur.borkowski2015</a>
            </div>
        </div>   
    </body>
</html>
