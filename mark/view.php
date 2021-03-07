<?php
require "connection.php";
//select all data from the database
$sql="SELECT * FROM staff";
$selectdata=mysqli_query($connect,$sql);

if($selectdata){
    $result=mysqli_num_rows($selectdata);
    if($result>0){
        echo"There is data present";
        echo"<table>";
        echo"<tr>";
        echo"<th>ID</th>";
        echo"<th>FULL NAMES</th>";
        echo"<th>EMAIL ADDRESS</th>";
        echo"<th>TEL NO</th>";
        echo"</tr>";

        while($row=mysqli_fetch_array($selectdata)){
            echo"<tr>";
            echo"<td>".$row['id']."</td>";
            echo"<td>".$row['fullnames']."</td>";
            echo"<td>".$row['emailaddress']."</td>";
            echo"<td>".$row['telno']."</td>";
            echo"</tr>";
        }


        echo"</table>";

    }else{
        echo"No records were found";
    }
}else{
    echo"Error, sql not executed $sql".mysqli_error($connect);
}














