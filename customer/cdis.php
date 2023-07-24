<?php
session_start(); 

if(!isset($_SESSION['email'])){
    header('location:../admin/login.php');
    exit;
}
?>
<?php include'../main/header.php' ?>
    
<div class="container mt-3">
  <h2>Customer's Details</h2> 
  <a href="customer.php"><button>Add Customers</button>   </a>      
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>description</th>
        <th>email</th>
        <th>phone</th>
        <th colspan="2">operation</th>
      </tr>
    </thead>
    <tbody>
     <?php
   
    include '../include/connect.php';
    
    $sql = "select * from customers";
    
    $result = mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $description=$row['description'];
            $email=$row['email'];
            $phone= $row['phone'];
            
            echo '<tr>
            <td>'.$id.'</td>
            <td><a href="customer_display.php">'.$name.'</a></td>
            <td>'.$description.'</td>
            <td>'.$email.'</td>
            <td>'.$phone.'</td>
            
            <td>
            <button class="btn btn-primary" width=10px><a href="customerup.php?customerupid='.$id.'" class="text-light">Update</a></button>
            <button  class="btn btn-danger"  width=10px><a href="cusdelete.php?cusdeleteid='.$id.'" class="text-light">Delete</a></button>
            </td>
    
            </tr>';
        }
    }

?>
    </tbody>
  </table>
</div>



<?php include'../main/footer.php' ?>
