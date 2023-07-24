<?php
// session_start();
include '../include/connect.php';
if(isset($_POST['Hand'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if(empty($name) || empty($description) || empty($email) || empty($phone)){
        $_SESSION['err_message']="Required fields cannot be empty";
        header('Location:customer.php');
        exit();
    }
    
    $insertquery="insert into customers(name,description,email,phone) values('$name','$description','$email','$phone')" ;

    $result = mysqli_query($con,$insertquery);

    if($result){
    
        ?>
        <script>
            alert("data inserted");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("data not inserted");
        </script>
        <?php
    }
    }

?>