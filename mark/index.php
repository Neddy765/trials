


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

<div class="container col-sm-6">
    <h2>Staff Form</h2>
    <p>Kindly fill in your details here</p>
    <form action="insert.php" method="post">

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

        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-outline-danger">Submit</button>

        </div>


    </form>
</div>
</body>
</html>