<?php

include("../db_connect.php");

function hashPassword($password) {
    return md5('sel' . $password . 'sel');
}

function getUserEmail($email) {
    $sql = "SELECT * FROM user WHERE id_user = :id_user";

    $DB->prepare($sql);
    $DB->execute(array('email' => $email));

    if ($DB->countRow() == 0) return null;

    return $DB->fetch();
}

?>