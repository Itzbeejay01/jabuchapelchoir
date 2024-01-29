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
$fullname = $_POST['fullname'];
$part = $_POST['part'];
$gender = $_POST['gender'];
$level = $_POST['level'];
$phone = $_POST['phone'];


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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JABU JCC</title>
   <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link rel="shortcut icon" href="https://arena.mycredentials.ng/wp-content/uploads/2021/04/jabu.jpg" type="image/x-icon">
</head>
</head>

<body class="w-full h-full bg-gray-700 py-24 p-10 lg:px-96 lg:py-20">
    <div class="w-full h-full bg-white rounded py-16 p-8 shadow-md lg:w-full lg:flex lg:flex-col lg:py-20 lg:justify-center lg:items-center">
        <div class="flex flex-col items-center">
            <img class="w-24" src="https://arena.mycredentials.ng/wp-content/uploads/2021/04/jabu.jpg" alt="">
            <h2 class="text-xl text-slate-900 font-bold mb-2 text-center">JOSEPH AYO BABALOLA UNIVERSITY</h2>
            <h2 class="text-lg text-slate-900 mb-4 text-center">JABU CHAPEL CHOIR</h2>
        </div>
        <form id="choirForm" method="post" aria-busy="" class="w-full h-full pb-3 lg:px-14">
         <?php
         //include 'submit.php'; ?>  
        <div class="mb-4">
            <input type="text" id="fullname" name="fullname" class="border-2 outline-none rounded-md form-input mt-1 p-2 w-full placeholder:text-gray-800"
                placeholder="Fullname"  required>
          </div>
            <div class="mb-4">
                <select id="part" name="part" class="text-gray-800 border-2 outline-none rounded-md form-select mt-1 p-2 w-full" required>
                    <option value="" disabled selected>Select Part</option>
                    <option value="1">Soprano</option>
                    <option value="2">Alto</option>
                    <option value="3">Tenor</option>
                    <option value="4">Bass</option>
                </select>
            </div>
            <div class="mb-4">
                <select id="gender" name="gender" class="text-gray-800 border-2 outline-none rounded-md form-select mt-1 p-2 w-full" required>
                    <option value="" disabled selected>Gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>
            <div class="mb-4">
                <select id="level" name="level" class="text-gray-800 border-2 outline-none rounded-md form-select mt-1 p-2 w-full" required>
                    <option value="" disabled selected>Select Level</option>
                    <option value="1">100</option>
                    <option value="2">200</option>
                    <option value="3">300</option>
                    <option value="4">400</option>
                    <option value="5">500</option>
                </select>
            </div>
            <div class="mb-4">
                <input type="text" id="phone" name="phone" class="border-2 outline-none rounded-md form-input mt-1 p-2 w-full placeholder:text-gray-800"
                    placeholder="Phone Number"  required>
              </div>

            <button name="login" type="submit" class="w-full bg-blue-500 hover:bg-blue-900 text-white p-2 rounded shadow-lg font-bold text-lg hover:bg-slate-500 active:bg-slate-500">Submit</button>
        </form>
    </div>
    <script>
        document.getElementById('choirForm').addEventListener('submit', function(evt) {
          var phone = document.getElementsByName('phone')[0].value;
          if (phone.length !== 11) {
            alert('Phone number must be 11 digits long');
            evt.preventDefault();
          }
        });
      </script>
</body>
</html>

