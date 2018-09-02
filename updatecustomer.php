<?php
session_start();
if(empty($_SESSION['username']))
{
    header('Location:signin.php');
}
else{
    echo "<script type='text/javascript'>alert('Please Log In');</script>";
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
$id =$_GET['pid'];
$query = "SELECT * FROM customers WHERE id=".$id."";
$result=$conn->query($query);
if(!$query){
    die('Invalid Query'.mysql_error());
    header('Location:signin.php');
}
$conn->close();
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
?>


<!DOCTYPE html>
<html>
<head>
    <title>Dorm Nepal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12" align="right">
                <form action="listing.php"><button type="submit" class="btn btn-success" name="listing" style="margin:5px; display: 'inline'">See All</button></form>
                <form action="signout.php">
                <button type="submit" class="btn btn-danger" name="signout" style="margin:5px; display: 'inline'">Logout</button></form>
            </div>
            <div class="col-md-4 offset-md-4" >
                    <a href="home.php"><img src="budget_logo.png" alt="Logo of Apple" width="120px" style="margin: 30px 30px 30px 100px;"></a>
            </div>
            <?php
                    if($result->num_rows>0){
                while($row=mysqli_fetch_array($result))
                {
                    ?>
            <div class="col-md-4 offset-md-4">
                <form name="login-form" method="POST" action="home.php">
                      <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control" name="fname" placeholder="Enter First Name"  value="<?php echo($row['fname']) ?>">
                      </div>
                      <div class="form-group">
                        <label for="lname">Last Name:</label>
                        <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" value="<?php echo($row['lname']) ?>">
                      </div>
                      <div class="form-group">
                        <label for="sex">Sex</label>
                      <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="sex">Sex</label>
                            </div>
                        <select class="custom-select" name="sex" >
                            <option selected> <?php echo($row['sex']) ?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    </div>
                      <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" class="form-control" name="age" placeholder="Enter Age" value="<?php echo($row['age']) ?>">
                      </div>
                      <div class="form-group">
                        <label for="country">Country</label>
                      <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="county">Country</label>
                            </div>
                        <select class="custom-select" name="country" >
                            <option selected> <?php echo($row['country']) ?></option>
                            <option value="AF">Afghanistan</option>
                            <option value="AX">Åland Islands</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua and Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia</option>
                            <option value="BQ">Bonaire</option>
                            <option value="BA">Bosnia and Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BV">Bouvet Island</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island</option>
                            <option value="CC">Cocos Islands</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CG">Congo</option>
                            <option value="CD">Congo</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Côte d'Ivoire</option>
                            <option value="HR">Croatia</option>
                            <option value="CU">Cuba</option>
                            <option value="CW">Curaçao</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="TF">French Southern Territories</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GG">Guernsey</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HM">Heard Island and McDonald Islands</option>
                            <option value="VA">Holy See</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IM">Isle of Man</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JE">Jersey</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="KP">North Korea</option>
                            <option value="KR">South Korea</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Lao People's Democratic Republic</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macao</option>
                            <option value="MK">Macedonia</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="FM">Micronesia</option>
                            <option value="MD">Moldova</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="ME">Montenegro</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RE">Réunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russian Federation</option>
                            <option value="RW">Rwanda</option>
                            <option value="BL">Saint Barthélemy</option>
                            <option value="SH">Saint Helena</option>
                            <option value="KN">Saint Kitts and Nevis</option>
                            <option value="LC">Saint Lucia</option>
                            <option value="PM">Saint Pierre and Miquelon</option>
                            <option value="VC">Saint Vincent and the Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome and Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SX">Sint Maarten</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                            <option value="SS">South Sudan</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard and Jan Mayen</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syrian Arab Republic</option>
                            <option value="TW">Taiwan</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania</option>
                            <option value="TH">Thailand</option>
                            <option value="TL">Timor-Leste</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad and Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks and Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="GB">United Kingdom</option>
                            <option value="US">United States</option>
                            <option value="UM">United States Minor Outlying Islands</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VE">Venezuela</option>
                            <option value="VN">Viet Nam</option>
                            <option value="VG">Virgin Islands British</option>
                            <option value="VI">Virgin Islands U.S.</option>
                            <option value="WF">Wallis and Futuna</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label for="date">Date of Arrival</label>
                        <input type="date" class="form-control" name="date" placeholder="Enter Date of Arrival" value="<?php echo($row['date']) ?>">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" value="<?php echo($row['email']) ?>">
                      </div>
                      <div class="form-group">
                        <label for="phone">Contact</label>
                        <input type="phone" class="form-control" name="phone" placeholder="Enter Contact Number" value="<?php echo($row['phone']) ?>">
                      </div>
                      <div class="form-group">
                        <label for="interest">Interest</label>
                      <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="interest">Interest</label>
                            </div>
                        <select class="custom-select" name="interest" >
                            <option selected> <?php echo($row['interest']) ?></option>
                            <option value="Hiking">Hiking</option>
                            <option value="Mountaineering">Mountaineering</option>
                            <option value="Tour">Tour</option>
                            <option value="Trekking">Trekking</option>

                        </select>
                    </div>
                    </div>
                      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                      <?php
                  }
              }
              ?>
                </form>
            </div>
        </div>
    </div>


</body>
</html>
