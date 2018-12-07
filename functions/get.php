<?php

include(dirname(__DIR__) . "/db_connect.php");


function getTemp($date) {
	global $DB;
	
    $sql = "SELECT * FROM weather_report WHERE report_date ='".$date."'";

    $result=$DB->query($sql);

    if (mysqli_num_rows($result)== 0) return null;

    return $result->fetch_array(MYSQLI_ASSOC);
}
//echo(getTemp("2018-12-07 00:54:57")["report_date"]);
function getTempRecent($nb_date) {
	global $DB;
	
    $sql = "SELECT * FROM weather_report ORDER BY report_date DESC LIMIT ".$nb_date;

    $result=$DB->query($sql);

    if (mysqli_num_rows($result)== 0) return null;

    return $result->fetch_all(MYSQLI_ASSOC);
}
//echo(getTempRecent(2)[0]["report_date"]);
?>