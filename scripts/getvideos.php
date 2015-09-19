<?php
require_once 'inc/db.php';

$q = "SELECT * FROM People";

$data = [];

if($result = mysqliQuery($q))
{
	while($row = $result->fetch_assoc())
	{
		$data[] = $row;
	}
}

echo json_encode($data);

?>