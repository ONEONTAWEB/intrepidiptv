<?php
$connection = mysqli_connect('localhost', 'root', '123pass');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'stalker_db');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
#$select_table = mysqli_select_table($connection, 'administrators');
#if (!$select_table){
   # die("Database Selection Failed" . mysqli_error($connection));