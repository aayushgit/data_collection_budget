<?php
session_start();
if(empty($_SESSION['username']))
{
    header('Location:signin.php');
}
?>
<?php
include_once "connection.php";
if(isset($_POST['submit']))
{
$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$country=$_POST['country'];
$date=$_POST['date'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$interest=$_POST['interest'];

$query = "UPDATE customers SET fname='$fname', lname='$lname', sex='$sex', age='$age', country='$country', date='$date', email='$email', phone='$phone', interest='$interest') WHERE id='$id'";
$result=mysqli_query($conn,$query);
echo($query);
if($result){
    header('Location:index.php');
    echo("Successful");
    echo "<font color='green'>Data updated successfully.";

}
else
{
    die("No Database Operation");
}
$conn->close();
}
?>
