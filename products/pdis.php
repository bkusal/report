<?php
session_start(); 

if(!isset($_SESSION['email'])){
    header('location:../admin/login.php');
    exit;
}
?>   
<?php include'../main/header.php' ?>
<div class="container mt-3">
  <h2>Product Details</h2> 
  <a href="product.php"><button>Add Products</button>   </a>
     
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>product_name</th>
        <th>description</th>
        <th colspan="2">operation</th>
      </tr>
    </thead>
    <tbody>
   

<?php
include '../include/connect.php';

$sql = "select * from products";

$result = mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['product_name'];
        $description=$row['description'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td><a href="product_display.php">'.$name.'</a></td>
        <td>'.$description.'</td>
        <td>
        <button class="btn btn-primary" width=10px><a href="pupdate.php?pupdateid='.$id.'" class="text-light">Update</a></button>
        <button  class="btn btn-danger"  width=10px><a href="pdelete.php?pdeleteid='.$id.'" class="text-light">Delete</a></button>
        </td>

        </tr>';
        
    }

}
?>
    </tbody>
  </table>
</div>

<?php include'../main/footer.php' ?> 
