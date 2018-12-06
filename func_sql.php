<?php
include 'db_connect.php';
/**
 *@brief create a new cell
 *@return cell id in DB
 */
function create_new_cell()
{
	global $DB;
	$sql="INSERT INTO `cells`(`bucket`) VALUES ('')";
	if ($DB->query($sql) === TRUE)
	{
		$last_id = $DB->insert_id;
		echo "New cell created. Last inserted ID is: " . $last_id;
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $DB->error;
	}
}
create_new_cell();
?>