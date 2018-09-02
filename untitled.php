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
$host="localhost";
$uname="root";
$pass="toor";
$dbname="hostel";
$conn=new mysqli($host,$uname,$pass,$dbname);
if($conn->connect_error)
    {
        die("Error in Connection");
    }
$id =$_GET['id'];
$query = "UPDATE customers SET fname='".$fname."', lname='".$lname."', sex='".$sex."', age='".$age."', country='".$country."', date='".$date."', email='".$email."', phone='".$phone."', interest='".$interest."')";
$result=$conn->query($query);
if(!$query){
    die('Invalid Query'.mysql_error());
    header('Location:signin.php');
}
else
{
    echo "<script type='text/javascript'>alert('Data Updated!');</script>";
    header('Location:home.php');
}
$conn->close();
}
