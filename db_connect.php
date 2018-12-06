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
echo "Connected successfully";
?> 