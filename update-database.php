<?php

require 'db.php';



function get_data($url) {
    $ch = curl_init();
    $timeout = 10;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}



$returned_content = get_data('https://openpaymentsdata.cms.gov/resource/a482-xr32.json?%24limit=500&%24%24app_token=YX209OguGoq0jEx3TXYFNvxVm');

$tmp=json_decode($returned_content,True);


foreach ($tmp as $key=>$val) {


    $chk_record = "Select record_id from test where record_id=" . $val['record_id'];

    $result = mysql_query($chk_record);

    $imd = $val;

    $insert_query = "Insert into test set ";
    $flag = mysql_fetch_array($result);
    if (empty($flag['record_id'])) {

        $cnt = count($imd);


        $i = 1;
        foreach ($imd as $key2 => $val2) {

            $val2 = str_replace("'"," ",$val2);
            if ($i < $cnt && $key2 != "name_of_third_party_entity_receiving_payment_or_transfer_of_value") {
                $insert_query .= "$key2='$val2',";
                $i++;
            } else if ($key2 == "name_of_third_party_entity_receiving_payment_or_transfer_of_value") {
                $insert_query .= "name_of_third_party_entity_receiving_payment_or_transfer_of_valu='$val2',";
                $i++;
            } else {
                $insert_query .= "$key2='$val2'";
                $i++;
            }
        }

        $execute = mysql_query($insert_query) or  die(print_r($imd['physician_last_name']));


    } else {

        $update_query = "Update test set ";

        $cnt = count($imd);
        // print_r($cnt);die;
        $j = 1;
        foreach ($imd as $key3 => $val2) {
            $val2 = str_replace("'"," ",$val2);
//
            if ($j < $cnt && $key3 != "record_id" && $key3 != "name_of_third_party_entity_receiving_payment_or_transfer_of_value") {
                $update_query .= "$key3='$val2',";
                $j++;

            } else if ($key3 == "record_id") {

                $j++;

            } else if ($key3 == "name_of_third_party_entity_receiving_payment_or_transfer_of_value") {
                $update_query .= "name_of_third_party_entity_receiving_payment_or_transfer_of_valu='$val2',";
                $j++;

            } else if ($j == $cnt) {
                $update_query .= "$key3='$val2'";
                $j++;


            }
        }
            $update_query .= " where record_id='" . $imd['record_id'] . "'";
           
            $execute = mysql_query($update_query) or die(mysql_error());
        }



}
return 0;

?>