<?php
$db = mysql_connect('localhost', 'root','')
or die ('Unable to connect to Database: ' . mysql_error());
mysql_select_db('doctordb');
?>