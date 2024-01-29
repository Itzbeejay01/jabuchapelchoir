<?php
$servername = 'db4free.net';
$username = "choirmembers";
$password = "choirmembers";
$dbname = "choir_members";
$dbport = 3306;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $dbport);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
   //echo "Connected";
}

// Get form data
//$fullname = $_POST['fullname'];
//$part = $_POST['part'];
//$gender = $_POST['gender'];
//$level = $_POST['level'];
//$phone = $_POST['phone'];


//Soprano
if($part == "1"){
$check_phone = $conn->query("SELECT phone FROM tblsoprano WHERE phone='$phone'");
	$count=$check_phone->num_rows;
	if ($count==0){
// Insert into database
$sql = "INSERT INTO tblsoprano (fullname, part, gender, level, phone)
VALUES ('$fullname', '$part', '$gender', '$level', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "<div style='background-color:red;color:white;font-weight:bold;text-align:center;padding:7px;background:green'>Information recorded successfully</div>";
        
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
        } 

else {	
    echo "<div style='background-color:red;color:white;font-weight:bold;text-align:center;padding:7px;background:red'>Sorry! Phone Number already exist!</div>";
        
}
}
//alto
else if($part == "2"){
    $check_phone = $conn->query("SELECT phone FROM tblalto WHERE phone='$phone'");
        $count=$check_phone->num_rows;
        if ($count==0){
    // Insert into database
    $sql = "INSERT INTO tblalto (fullname, part, gender, level, phone)
    VALUES ('$fullname', '$part', '$gender', '$level', '$phone')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<div style='background-color:red;color:white;font-weight:bold;text-align:center;padding:7px;background:green'>Information recorded successfully</div>";
            
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
            } 
    
    else {	
        echo "<div style='background-color:red;color:white;font-weight:bold;text-align:center;padding:7px;background:red'>Sorry! Phone Number already exist!</div>";
            
    }
    }
//tenor
else if($part == "3"){
    $check_phone = $conn->query("SELECT phone FROM tbltenor WHERE phone='$phone'");
        $count=$check_phone->num_rows;
        if ($count==0){
    // Insert into database
    $sql = "INSERT INTO tbltenor (fullname, part, gender, level, phone)
    VALUES ('$fullname', '$part', '$gender', '$level', '$phone')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<div style='background-color:red;color:white;font-weight:bold;text-align:center;padding:7px;background:green'>Information recorded successfully</div>";
            
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
            } 
    
    else {	
        echo "<div style='background-color:red;color:white;font-weight:bold;text-align:center;padding:7px;background:red'>Sorry! Phone Number already exist!</div>";
            
    }
    }
//bass
else if($part == "4"){
    $check_phone = $conn->query("SELECT phone FROM tblbass WHERE phone='$phone'");
        $count=$check_phone->num_rows;
        if ($count==0){
    // Insert into database
    $sql = "INSERT INTO tblbass (fullname, part, gender, level, phone)
    VALUES ('$fullname', '$part', '$gender', '$level', '$phone')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<div style='background-color:red;color:white;font-weight:bold;text-align:center;padding:7px;background:green'>Information recorded successfully</div>";
            
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
            } 
    
    else {	
        echo "<div style='background-color:red;color:white;font-weight:bold;text-align:center;padding:7px;background:red'>Sorry! Phone Number already exist!</div>";
            
    }
    }
$conn->close();
?>
