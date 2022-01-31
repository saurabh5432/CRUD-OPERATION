<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'saurabh';

$con = mysqli_connect("localhost:3307",$username, $password ,$db);

if($con)
{
    // echo "Connection Successful";
    ?>

    <script>
        alert('connection successful');
    </script>

    <?php
}
else
{
    // echo "No connection";
    die("no connection" . mysqli_connect_error());
}
?> 

