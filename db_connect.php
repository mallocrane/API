 <?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$DB = new mysqli($servername, $username, $password);

// Check connection
if ($DB->connect_error) {
    die("Connection failed: " . $DB->connect_error);
}
//echo "Connected successfully\n";
if($DB->select_db("nuitdeinfo")){
    //echo "Connected to DB : nuit2info ";
}
?> 