<?php
include_once "connection.php";
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$country=$_POST['country'];
$date=$_POST['date'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$interest=$_POST['interest'];
$query = "UPDATE customers SET fname='$fname', lname='$lname', sex='$sex', age='$age', country='$country', date='$date', email='$email', phone='$phone', interest='$interest')";
$result=mysqli_query($conn,$query);
if($result){
    echo("Successful");
    echo "<font color='green'>Data added successfully.";
    header('Location:index.php');
}
else
{
    die("No Database Operation");
}
$conn->close();
}
?>
