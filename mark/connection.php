<?php
$link=mysqli_connect("localhost","root","","mark");
if (!$link){
    die("connection error");
}else{
    echo "Wonderful Mark! you are connected to the database";
}