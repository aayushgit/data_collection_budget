<?php
session_start();
include_once "connection.php";
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['pwd'];
$query = "SELECT * FROM users WHERE name='$username' AND password='$password'";
$result=mysqli_query($conn,$query);
if(!$query){
    die('Invalid Query' .mysql_error());
}
if($result->num_rows>0)
{
    $_SESSION["username"]=$username;
    $_SESSION["password"]=$password;
    header('Location:home.php');
    exit();
}
else
{
    echo "<script type='text/javascript'>alert('Invalid Login');</script>";

}
$conn->close();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" >
                    <a href="home.php"><img src="budget_logo.png" alt="Logo of Budget Trekking" width="120px" style="margin: 30px 30px 30px 100px;"></a>
            </div>
            <div class="col-md-4 offset-md-4">
                <form name="login-form" method="POST" action="signin.php">
                      <div class="form-group">
                        <label for="username">User Id</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter Your Username" required="">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" name="pwd" placeholder="Enter Your Password" required="">
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                      </div>
                      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>


</body>
</html>
