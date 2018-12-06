<?php

include(dirname(__DIR__) . "/db_connect.php");

function hashPassword($password) {
    return md5('sel' . $password . 'sel');
}

function getUserEmail($email) {
	global $DB;
    $sql = "SELECT * FROM user WHERE email ='".$email."'";

    $result=$DB->query($sql);

    if (mysqli_num_rows($result)== 0) return null;

    return $result->fetch_array(MYSQLI_ASSOC);
}

?>