<?php


$sName = "localhost";
$uName = "root";
$pass = "";
$db_name= "to_do_list";

try 
{
    $connect = new PDO("mysql:host=$sName;dbname=$db_name", 
                        $uName, $pass);
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected!";
}catch(PDOException $e)
{
    echo "Connection Failed : ". $e->getMessage();
}
