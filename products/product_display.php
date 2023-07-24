<?php
session_start(); 

if(!isset($_SESSION['email'])){
    header('location:../admin/login.php');
    exit;
}
?>   
<?php include'../main/header.php' ?>
<div class="container mt-3">
  

<div class="container mt-3">
  <h2>Product Details</h2> 

     
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>product_name</th>
        <th>description</th>
        <th>created_at</th>
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
        $created=$row['created_at'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td><a href="productdisplay.php">'.$name.'</a></td>
        <td>'.$description.'</td>
        <td>'.$created.'</td>
       

        </tr>';
        
    }

}
?>
    </tbody>
  </table>
</div>


<?php include'../main/footer.php' ?> 
