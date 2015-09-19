<?php
require_once 'inc/db.php';

$id = $_POST['id'];

$q = "UPDATE People SET Votes = (Votes + 1) WHERE PersonID = $id";
mysqliNonQuery($q);

