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

/*
     $writeCsv = array();

        $fp = fopen('file.csv','w');

        foreach ($data as $fields){
            fputcsv($fp,$fields);
        }

        fclose($fp);*/


class html {
    public static function createTable($data){


        $row = 1;
        if (($handle = fopen("countrylist.csv", "r")) !== FALSE) {

            echo '<table border="1">';

            while (($data = fgetcsv($handle)) !== FALSE) {
                $num = count($data);
                if ($row == 1) {
                    echo '<thead><tr>';
                }else{
                    echo '<tr>';
                }

                for ($c=0; $c < $num; $c++) {
                    //echo $data[$c] . "<br />\n";
                    if(empty($data[$c])) {
                        $value = "&nbsp;";
                    }else{
                        $value = $data[$c];
                    }
                    if ($row == 1) {
                        echo '<th>'.$value.'</th>';
                    }else{
                        echo '<td>'.$value.'</td>';
                    }
                }

                if ($row == 1) {
                    echo '</tr></thead><tbody>';
                }else{
                    echo '</tr>';
                }
                $row++;
            }

            echo '</tbody></table>';
            fclose($handle);
        }

   /*     for($i=0;$i<22;$i++){
            foreach ($data as $key1 => $row1){
                {
                    echo"<th>" .$row1[$i] ."</th>";
                }
            }

        }
        foreach($data as $key => $row){
            echo"<tr>";
            foreach($row as $key2=>$row2){
                echo "<td>" .$row2 ."</td>";
            }

            echo"</tr>";
        }

        echo "</table>";
    }*/
        }

}


?>
