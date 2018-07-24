<?php

require 'db.php';



$sql="select * from test where total_amount_of_payment_usdollars>10.0";

$result=mysql_query($sql);

$data = array();
while (($row = mysql_fetch_array($result, MYSQL_ASSOC)) !== false){
    $data[] = $row;
}


?>


<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <title>Doctor Tab</title>
</head>
<body>

<div  class="form-group">
    <form id="report" method="post" action="excel_export.php">
    <label>City :</label>
    <input type="text" name="city" id="city"  class='auto' value="">
    <button type="button" onclick="searchbycity()">Submit</button>

    <button type="submit">Export To XLS</button>
    </form>

</div>

<div id="db_table">
<table class="table table-bordered" width="100%">
    <thead>

    <tr>
        <th>change_type</th>
        <th>covered_recipient_type</th>
        <th>teaching_hospital_ccn</th>
        <th>teaching_hospital_id</th>
        <th>teaching_hospital_name</th>
        <th>physician_profile_id</th>
        <th>physician_first_name</th>
        <th>physician_middle_name</th>
        <th>physician_last_name</th>
        <th>physician_name_suffix</th>
        <th>recipient_primary_business_street_address_line1</th>
        <th>recipient_primary_business_street_address_line2</th>
        <th>recipient_city</th>
        <th>recipient_state</th>
        <th>recipient_zip_code</th>
        <th>recipient_country</th>
        <th>recipient_province</th>
        <th>recipient_postal_code</th>
        <th>physician_primary_type</th>
        <th>physician_specialty</th>
        <th>physician_license_state_code1</th>
        <th>physician_license_state_code2</th>
        <th>physician_license_state_code3</th>
        <th>physician_license_state_code4</th>
        <th>physician_license_state_code5</th>
        <th>submitting_applicable_manufacturer_or_applicable_gpo_name</th>
        <th>applicable_manufacturer_or_applicable_gpo_making_payment_id</th>
        <th>applicable_manufacturer_or_applicable_gpo_making_payment_name</th>
        <th>applicable_manufacturer_or_applicable_gpo_making_payment_state</th>
        <th>applicable_manufacturer_or_applicable_gpo_making_payment_country</th>
        <th>total_amount_of_payment_usdollars</th>
        <th>date_of_payment</th>
        <th>number_of_payments_included_in_total_amount</th>
        <th>form_of_payment_or_transfer_of_value</th>
        <th>nature_of_payment_or_transfer_of_value</th>
        <th>city_of_travel</th>
        <th>state_of_travel</th>
        <th>country_of_travel</th>
        <th>physician_ownership_indicator</th>
        <th>third_party_payment_recipient_indicator</th>
        <th>name_of_third_party_entity_receiving_payment_or_transfer_of_value</th>
        <th>charity_indicator</th>
        <th>third_party_equals_covered_recipient_indicator</th>
        <th>contextual_information</th>
        <th>delay_in_publication_indicator</th>
        <th>record_id</th>
        <th>dispute_status_for_publication</th>
        <th>product_indicator</th>
        <th>name_of_associated_covered_drug_or_biological1</th>
        <th>name_of_associated_covered_drug_or_biological2</th>
        <th>name_of_associated_covered_drug_or_biological3</th>
        <th>name_of_associated_covered_drug_or_biological4</th>
        <th>name_of_associated_covered_drug_or_biological5</th>
        <th>ndc_of_associated_covered_drug_or_biological1</th>
        <th>ndc_of_associated_covered_drug_or_biological2</th>
        <th>ndc_of_associated_covered_drug_or_biological3</th>
        <th>ndc_of_associated_covered_drug_or_biological4</th>
        <th>ndc_of_associated_covered_drug_or_biological5</th>
        <th>name_of_associated_covered_device_or_medical_supply1</th>
        <th>name_of_associated_covered_device_or_medical_supply2</th>
        <th>name_of_associated_covered_device_or_medical_supply3</th>
        <th>name_of_associated_covered_device_or_medical_supply4</th>
        <th>name_of_associated_covered_device_or_medical_supply5</th>
        <th>program_year</th>
        <th>payment_publication_date</th>

    </tr>

    </thead>
    <tbody>
    <?php

    foreach($data as $key=>$val){?>
    <tr>
        <td><?php  echo $val['change_type'];?></td>
        <td><?php  echo $val['covered_recipient_type'];?></td>
        <td><?php  echo $val['teaching_hospital_ccn'];?></td>
        <td><?php  echo $val['teaching_hospital_id'];?></td>
        <td><?php  echo $val['teaching_hospital_name'];?></td>
        <td><?php  echo $val['physician_profile_id'];?></td>
        <td><?php  echo $val['physician_first_name'];?></td>
        <td><?php  echo $val['physician_middle_name'];?></td>
        <td><?php  echo $val['physician_last_name'];?></td>
        <td><?php  echo $val['physician_name_suffix'];?></td>
        <td><?php  echo $val['recipient_primary_business_street_address_line1'];?></td>
        <td><?php  echo $val['recipient_primary_business_street_address_line2'];?></td>
        <td><?php  echo $val['recipient_city'];?></td>
        <td><?php  echo $val['recipient_state'];?></td>
        <td><?php  echo $val['recipient_zip_code'];?></td>
        <td><?php  echo $val['recipient_country'];?></td>
        <td><?php  echo $val['recipient_province'];?></td>
        <td><?php  echo $val['recipient_postal_code'];?></td>
        <td><?php  echo $val['physician_primary_type'];?></td>
        <td><?php  echo $val['physician_specialty'];?></td>
        <td><?php  echo $val['physician_license_state_code1'];?></td>
        <td><?php  echo $val['physician_license_state_code2'];?></td>
        <td><?php  echo $val['physician_license_state_code3'];?></td>
        <td><?php  echo $val['physician_license_state_code4'];?></td>
        <td><?php  echo $val['physician_license_state_code5'];?></td>
        <td><?php  echo $val['submitting_applicable_manufacturer_or_applicable_gpo_name'];?></td>
        <td><?php  echo $val['applicable_manufacturer_or_applicable_gpo_making_payment_id'];?></td>
        <td><?php  echo $val['applicable_manufacturer_or_applicable_gpo_making_payment_name'];?></td>
        <td><?php  echo $val['applicable_manufacturer_or_applicable_gpo_making_payment_state'];?></td>
        <td><?php  echo $val['applicable_manufacturer_or_applicable_gpo_making_payment_country'];?></td>
        <td><?php  echo $val['total_amount_of_payment_usdollars'];?></td>
        <td><?php  echo $val['date_of_payment'];?></td>
        <td><?php  echo $val['number_of_payments_included_in_total_amount'];?></td>
        <td><?php  echo $val['form_of_payment_or_transfer_of_value'];?></td>
        <td><?php  echo $val['nature_of_payment_or_transfer_of_value'];?></td>
        <td><?php  echo $val['city_of_travel'];?></td>
        <td><?php  echo $val['state_of_travel'];?></td>
        <td><?php  echo $val['country_of_travel'];?></td>
        <td><?php  echo $val['physician_ownership_indicator'];?></td>
        <td><?php  echo $val['third_party_payment_recipient_indicator'];?></td>
        <td><?php  echo $val['name_of_third_party_entity_receiving_payment_or_transfer_of_valu'];?></td>
        <td><?php  echo $val['charity_indicator'];?></td>
        <td><?php  echo $val['third_party_equals_covered_recipient_indicator'];?></td>
        <td><?php  echo $val['contextual_information'];?></td>
        <td><?php  echo $val['delay_in_publication_indicator'];?></td>
        <td><?php  echo $val['record_id'];?></td>
        <td><?php  echo $val['dispute_status_for_publication'];?></td>
        <td><?php  echo $val['product_indicator'];?></td>
        <td><?php  echo $val['name_of_associated_covered_drug_or_biological1'];?></td>
        <td><?php  echo $val['name_of_associated_covered_drug_or_biological2'];?></td>
        <td><?php  echo $val['name_of_associated_covered_drug_or_biological3'];?></td>
        <td><?php  echo $val['name_of_associated_covered_drug_or_biological4'];?></td>
        <td><?php  echo $val['name_of_associated_covered_drug_or_biological5'];?></td>
        <td><?php  echo $val['ndc_of_associated_covered_drug_or_biological1'];?></td>
        <td><?php  echo $val['ndc_of_associated_covered_drug_or_biological2'];?></td>
        <td><?php  echo $val['ndc_of_associated_covered_drug_or_biological3'];?></td>
        <td><?php  echo $val['ndc_of_associated_covered_drug_or_biological4'];?></td>
        <td><?php  echo $val['ndc_of_associated_covered_drug_or_biological5'];?></td>
        <td><?php  echo $val['name_of_associated_covered_device_or_medical_supply1'];?></td>
        <td><?php  echo $val['name_of_associated_covered_device_or_medical_supply2'];?></td>
        <td><?php  echo $val['name_of_associated_covered_device_or_medical_supply3'];?></td>
        <td><?php  echo $val['name_of_associated_covered_device_or_medical_supply4'];?></td>
        <td><?php  echo $val['name_of_associated_covered_device_or_medical_supply5'];?></td>
        <td><?php  echo $val['program_year'];?></td>
        <td><?php  echo $val['payment_publication_date'];?></td>









    </tr>
    <?php }?>
    </tbody>
</table>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){

        $(function() {
            $("#city").autocomplete({
                source: "suggest_name.php",
            });
        });

        $(function refreshText() {
            //alert();
        jQuery.ajax({
            url:"update-database.php",
            success:function(result){
               // $("#text").val(result);
               // location.reload();
                setTimeout(refreshText, 10000);
            }
        });


    });
    });



    function senddata(rows) {

        console.log(rows);
        var data=rows;
        //alert(data);
        jQuery.ajax({
            type: "POST",
            url: "update-database.php",
            dataType: 'json',
            data: { data},
            success: function (result) {

            }
        });
    }


    function searchbycity(){
        var city=$("#city").val();
        jQuery.ajax({
            type: "POST",
            url: "search_db.php",
           // dataType: 'json',
            data: { city_name:city},
            success: function (result) {
              // alert('hi');
                $('#db_table').html(result)

            }
        });
    }


</script>
</body>
</html>
