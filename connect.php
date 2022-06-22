<?php
    $firstName = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mob = $_POST['mob'];
    $dob = $_POST['dob'];
    //$rpass = $_POST['rpass'];

    $servername = "localhost"; 
    $database = "tutor"; 
    $username = "root"; 
    $password = ''; 
    // Create connection
    $conn = new mysqli($servername,$username,$password,$database);
    if($conn->connect_error){
        die('connection failed :'.$conn->connect_error);
    }

    $s= "SELECT * FROM Parents_Details WHERE Email_ID = '$email'";

  $result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);

    if($num==1){
      echo" user already taken";
    }
   else{


    $sql = "INSERT INTO Parents_Details  VALUES ('$firstName', '$lastname', '$email', '$password', '$mob', '$dob')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>