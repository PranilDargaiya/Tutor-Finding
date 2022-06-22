<?php
 
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    $servername = "localhost"; 
    $database = "tutor"; 
    $username = "root"; 
    $password = ''; 
    // Create connection
    $conn = new mysqli($servername,$username,$password,$database);
    if($conn->connect_error){
        die('connection failed :'.$conn->connect_error);
    }
    $conn->close();


    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = mysqli_query("SELECT * FROM Parents_Details WHERE Email_ID = '".$_POST['email']."' and Password = '".$_POST['password']."'");
    $row = mysqli_num_rows($conn,$sql);
        if($rom > 0 )
    {
      session_start();
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['password'] = $_POST['password'];
      echo "login done";
    }else {
      echo "fail login ";
    }






//    if(isset($_POST['email'])){
//      $email = $_POST['email'];
//      $password = $_POST['password'];

//      $sql="SELECT * FROM Parents_Details WHERE Email_ID='".$email."' AND Password='".$password."' limit 1";
      
 //     $result = mysql_query($conn,$sql);

  //    if(mysql_num_rows($result)==1)
    //  {
     //    echo"You Have Login Successfully";
    //  }
     // else{
      //   echo"incorrect";
     // }
    //}
   
?>