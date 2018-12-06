<?php
include 'db_connect.php';
/**
 *@brief create a new cell
 *@return cell id in DB
 */
function create_new_cell()
{
	$sql="INSERT INTO `cells`(`cell_prev`, `cell_next`, `bucket`) VALUES (NULL,NULL,'')";
	if ($DB->query($sql) === TRUE)
	{
		$last_id = $DB->insert_id;
		echo "New record created successfully. Last inserted ID is: " . $last_id;
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $DB->error;
	}
}
?>