<?php

require 'db.php';



$term = trim(strip_tags($_GET['term']));
$a_json = array();
$a_json_row = array();
if ($data = mysql_query("SELECT distinct recipient_city FROM  test WHERE recipient_city LIKE '%$term%'  ORDER BY recipient_city")) {
    while($row = mysql_fetch_array($data)) {
        $recipient_city = htmlentities(stripslashes($row['recipient_city']));

        $a_json_row["id"] = $recipient_city;
        $a_json_row["value"] = $recipient_city;
        $a_json_row["label"] = $recipient_city;
        array_push($a_json, $a_json_row);
    }
}
// jQuery wants JSON data
echo json_encode($a_json);
flush();