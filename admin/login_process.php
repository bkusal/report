<?php
session_start();
include '../include/connect.php';
if(isset($_POST['Login'])){
$email = $_POST['email'];
$password = $_POST['password'];


if($email && $password){
    // $query = "SELECT * FROM admin WHERE email='".$email."'";
    $query = "SELECT * FROM admin WHERE email='{$email}' ";
    $final= mysqli_query($con,$query);
    $numrows= mysqli_num_rows($final);

    if($numrows > 0){
        while($row= mysqli_fetch_assoc($final)){
           if(password_verify($password,$row['password'])){
        $_SESSION['email']= $row['email'];
        $_SESSION['auth_user_id'] = $row['id'];
        $_SESSION['success_message'] = "Logged in successfully";
        header('Location:dash.php');
        exit();
           }
    }
        $_SESSION['error_message'] = "Incorrect email or password";
        header('location:login.php');
        exit();   
}else{
        $_SESSION['error_message'] = "Email and password cannot be empty.";
        header('location:login.php');
        exit();  
    }

}
}

?> 