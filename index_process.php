
<?php
session_start(); // Start the session

include './include/connect.php';
if (isset($_POST['Submit'])) {
   
    $subject = $_POST['subject'];
    $product_id=$_POST['product_id'];
    $customer_id=$_POST['customer_id'];
    $description=$_POST['description'];
    $file = $_FILES['image'];

    if(empty($subject) || empty($product_id) || empty($customer_id)){
        $_SESSION['err_message']="Required fields cannot be empty";
        header('Location:index.php');
        exit();
    }
    
    // upload dir
    $file_location= 'images';

    // mime type
    $imageFileType = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
    
    $target_file = $file_location . '/' . time() . '.'.$imageFileType;
    

    if(move_uploaded_file($file["tmp_name"], $target_file)){
    

   
        $insertdata="insert into customer_queries(subject, product_id, customer_id, description, image) values('$subject','$product_id','$customer_id', '$description', '$target_file')" ;
        $result= mysqli_query($con,$insertdata);
        
        
    }

        if($result){
        $_SESSION['success_message']="Querie submitted successfully";
        header('Location:index.php');
        exit();
    
    }
}
?>
