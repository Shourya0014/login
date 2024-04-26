<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
    $FirstName=$_POST['fName'];
    $LastName=$_POST['lName'];
    $Email=$_POST['email'];
    $PhoneNo = $_POST['pnumber'];
    $Hobby = $_POST['hobby'];
    $Password=$_POST['password'];
    $Password=md5($Password);
    $ConfirmPassword = $_POST['cnfPassword'];

     $checkEmail="SELECT * From users where email='$Email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO users(FirstName , LastName , Email , PhoneNo , Hobby ,Password , ConfirmPassword )
                       VALUES ('$FirstName','$LastName', '$Email','$PhoneNo','$Hobby', '$Password' , '$ConfirmPassword')";
            if($conn->query($insertQuery)==TRUE){
                header("location: Index.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

}

if(isset($_POST['signIn'])){
   $Email=$_POST['email'];
   $Password=$_POST['password'];
   $Password=md5($Password) ;
   
   $sql="SELECT * FROM users WHERE Email='$Email' and password='$Password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['Email']=$row['Email'];
    header("Location: homepage.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }

}
?>