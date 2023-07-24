<?php
session_start();
include '../include/connect.php';
if(isset($_POST['ok'])){
    $name = $_POST['product_name'];
    $description= $_POST['description'];
    
    if(empty($name) || empty($description)){
        $_SESSION['err_message']="Required fields cannot be empty";
        header('Location:product.php');
        exit();
    }


    $insertquery="insert into products(product_name,description) values('$name','$description')" ;

    $result = mysqli_query($con,$insertquery);

    if($result){
       
            $_SESSION['success_message']="Product name submitted successfully";
            header('Location:product.php');
            exit();
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