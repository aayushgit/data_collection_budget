<?php
session_start();
if(empty($_SESSION['username']))
{
    header('Location:signin.php');
}
?>
<?php
$host="localhost";
$uname="root";
$pass="toor";
$dbname="hostel";
$conn=new mysqli($host,$uname,$pass,$dbname);
if($conn->connect_error)
    {
        die("Error in Connection");
    }
$query = "SELECT * FROM customers";
$result=$conn->query($query);
if(!$query){
    die('Invalid Query' .mysql_error());
}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>All Customers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" >
                    <a href="home.php"><img src="budget_logo.png" alt="Logo of Apple" width="120px" style="margin: 30px 30px 30px 100px;"></a>
            </div>
        <div class="col-md-12">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Sex</th>
                  <th scope="col">Age</th>
                  <th scope="col">Country</th>
                  <th scope="col">Date</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Interest</th>
                  <th scope="col">Update</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    if ($result->num_rows>0){
                        while($row=mysqli_fetch_array($result))
                        {
                    ?>
                <tr>
                  <th scope="row"><?php echo($row['id']); ?></th>
                  <td><?php echo($row['fname']); ?></td>
                  <td><?php echo($row['lname']); ?></td>
                  <td><?php echo($row['sex']); ?></td>
                  <td><?php echo($row['age']); ?></td>
                  <td><?php echo($row['country']); ?></td>
                  <td><?php echo($row['date']); ?></td>
                  <td><?php echo($row['email']); ?></td>
                  <td><?php echo($row['phone']); ?></td>
                  <td><?php echo($row['interest']); ?></td>
                  <td><?php echo "<a href='updatecustomer.php?pid=".$row['id']."'>Update</a>";?></td>
                </tr>
                <?php
            }
        }
        ?>
              </tbody>
            </table>
        </div>



</body>
</html>
