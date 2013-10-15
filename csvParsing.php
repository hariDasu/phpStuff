/**
* Created by JetBrains PhpStorm.
* User: kingHenry
* Date: 10/14/13
* Time: 9:49 PM
* To change this template use File | Settings | File Templates.
*/

<?php

    $countryArray = array();

    $file_handle = fopen("countrylist.csv","r");

    while (!feof($file_handle) ) {

        $line_of_text = fgetcsv($file_handle);

        print_r ($line_of_text);

    }
    fclose($file_handle);

?>
