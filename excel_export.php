<?php

require 'db.php';
$filename = "WebisteData.xls"; // File Name
// Download file

header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");

$city = trim(strip_tags($_POST['city']));

if(empty($city)){
    $user_query = mysql_query('select * from test');
}else{
    $str="SELECT * FROM  test WHERE recipient_city LIKE '%$city%'  ORDER BY recipient_city";
    $user_query = mysql_query($str);
}

// Write data to file

//if(!empty($user_query)) {
    $flag = false;
    while ($row = mysql_fetch_assoc($user_query)) {
        if (!$flag) {

            echo implode("\t", array_keys($row)) . "\r\n";
            $flag = true;
        }
        echo implode("\t", array_values($row)) . "\r\n";
    }
//}