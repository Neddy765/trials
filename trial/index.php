
<?php
include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Staff</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<nav aria-label="breadcrumb" class="pt-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="welcome.php">Home</a></li>
        <li class="breadcrumb-item"><a href="add.html">Add item</a></li>
        <li class="breadcrumb-item"><a href="">logout</a></li>
        <li class="breadcrumb-item-active" aria-current="page"></li>
    </ol>
</nav>

<div class="container col-sm-6">
    <h2>Staff Form</h2>
    <p>Kindly fill in your details here</p>
    <form action=""name="staff" method="post">

        <div class="form-group">
            <label>Full names</label>
            <input class="form-control" type="text"name="fullnames" placeholder="Enter your full names" required>
        </div>
        <div class="form-group">
            <label>Email address</label>
            <input class="form-control" type="email"name="emailaddress" placeholder="Enter your email address" required>
        </div>

        <div class="form-group">
            <label>Tel No</label>
            <input class="form-control" type="varchar"name="telno" placeholder="Your phone number" required>
        </div>

      <div>
          <button type="submit" name="insert" class="btn btn-outline-danger">Insert</button>
          <button type="submit" name="delete" class="btn btn-outline-danger">Delete</button>
          <button type="submit" name="update" class="btn btn-outline-danger">Update</button>
      </div>


    </form>
</div>
<div>
<table border="50px" ; width="500px"; bgcolor="#7fff00">
    <tr>
        <th>#</th>
        <th>FULL NAMES</th>
        <th>EMAIL ADDRESS</th>
        <th>TEL NO</th>

    </tr>
    <tbody>
    <?php
$res=mysqli_query("select * from staff ");
while ($row=mysqli_fetch_array($res,null)){

echo "<tr>";
echo "<td>"; echo $row["ID"]; echo"</td>";
    echo "<td>"; echo $row["FULL NAMES"]; echo"</td>";
    echo "<td>"; echo $row["EMAIL ADDRESS"]; echo"</td>";
    echo "<td>"; echo $row["TEL NO"]; echo"</td>";
    echo "<tr>";


}


    ?>
    </tbody>
</table>
</div>

<?php
if(isset($_POST["insert"] )) {
    mysqli_query("insert into staff values ($_POST[fullnames],$_POST[emailaddress],$_POST[telno])");

}
if (isset($_POST["delete"])){

mysqli_query("delete from staff where name='$post'")

}
?>

</body>
</html>
