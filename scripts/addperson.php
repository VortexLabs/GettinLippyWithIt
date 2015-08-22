<?php
    require_once 'inc/db.php';

    if(isset($_POST['submit']) && $_POST['submit'] == "adduser")
    {
    	$name = $_POST['name'];
    	$email = $_POST['email'];
    	$link = $_POST['link'];

    	$q = "INSERT INTO People (Name, Email, Link) VALUES ('$name', '$email', '$link')";
    	mysqliNonQuery($q);

    	echo "success";
    	die();
    }

    ?>
