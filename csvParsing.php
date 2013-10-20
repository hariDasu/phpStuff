/**
* Created by JetBrains PhpStorm.
* User: kingHenry
* Date: 10/14/13
* Time: 9:49 PM
* To change this template use File | Settings | File Templates.
*/

<?php

        $csv = array();
        $file = fopen('countrylist.csv', 'r');

        while (($result = fgetcsv($file)) !== false)
        {
            $csv[] = $result;
        }

        fclose($file);

        //echo '<pre>';
        //print_r($csv);


    html::createTable($csv);
  /*  foreach($csv as $record){
        foreach($record as $label => $value){
            echo $label . ': ' . $value . '</br>';
        }
    }*/
       // echo '</pre>';


     $writeCsv = array();

        $fp = fopen('file.csv','w');

        foreach ($data as $fields){
            fputcsv($fp,$fields);
        }

        fclose($fp);


class html {
    public static function createTable($data){
        echo "<table>";
        foreach($data as $key => $row){
            echo"<tr>";
            foreach($row as $key2=>$row2){
                echo "<td>" .$row2 ."</td>";
            }

            echo"</tr>";
        }

        echo "</table>";
    }
}







?>
