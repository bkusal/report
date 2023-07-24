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
      
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>description</th>
        <th>email</th>
        <th>phone</th>
        <th>created_at</th>
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
            $created=$row['created_at'];
            
            
            echo '<tr>
            <td>'.$id.'</td>
            <td><a href="cdisplayustomer.php">'.$name.'</a></td>
            <td>'.$description.'</td>
            <td>'.$email.'</td>
            <td>'.$phone.'</td>
            <td>'.$created.'</td>
            
    
            </tr>';
        }
    }

?>
    </tbody>
  </table>
</div>



<?php include'../main/footer.php' ?>
