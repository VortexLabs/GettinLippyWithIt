<?php
    require_once 'inc/db.php';

    if(isset($_POST['submit']) && $_POST['submit'] == "adduser")
    {
    	$name = $_POST['name'];
    	$email = $_POST['email'];
    	$link = $_POST['link'];
        $attending = $_POST['attending'];
        $a = 0;
        if($attending == "Yes")
        {
            $a = 1;

            $q = "SELECT PersonID FROM People WHERE Attending = 1";
            $result = mysqliQuery($q);
            if(count($result) >= 180)
            {
                echo "too many people";
                die();
            }
        }



    	$q = "INSERT INTO People (Name, Email, Link, Attending) VALUES ('$name', '$email', '$link', $a)";
    	mysqliNonQuery($q);

    	echo "success";
    	die();
    }

    ?>
