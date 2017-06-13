<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db="hifn";
$conn=mysqli_connect($host,$username,$password,$db);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
