<?php

//require the connection
require "connection.php";
if (isset
($_POST["fullnames"],
    $_POST["emailaddress"],
    $_POST["telno"]
)){
    echo"values picked for".$_POST["fullnames"]."<br>";
    $fullnames=$_POST["fullnames"];
    $emailaddress= $_POST["emailaddress"];
    $telno=$_POST["telno"];

    $sql="INSERT INTO `staff`(`fullnames`, `emailaddress`, `telno`) VALUES ('$fullnames','$emailaddress','$telno')";
    $result=mysqli_query($link,$sql);
    if ($result){
        echo"Record was added succesully";
        header("location:view.php");
    }else{
        echo"Error adding data $sql".mysqli_error($link);
    }



}else{
    echo"values not picked";



}










