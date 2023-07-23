<?php

$username = "root";
$password = "";
$server = "localhost";
$db = "journal_users";

$con = mysqli_connect($server,$username,$password,$db);

/**if($con){
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Connection Successfull.');
    </script>");
}else{
    //echo " No connection"; 
    die("No connection : " . mysqli_connect_error());
} */

?>