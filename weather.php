<?php

session_start();
require('functions/get.php');

if (isset($_GET) && isset($_GET['info'])) {
    if ($_GET['info'] == 'report' && isset($_GET['nb_date'])) {
        echo json_encode(getTempRecent($_GET['nb_date']));
    }
}