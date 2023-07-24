<?php
session_start(); 

if(!isset($_SESSION['email'])){
    header('location:../admin/loginad.php');
    exit;
}
?> 
<?php include'../main/header.php' ?>

<div class="container mt-3">
  <h2>Customer's Queries</h2>
  <div class="table-responsive">    
  <table class="table  table-stripped">
    <thead>
      <tr>
        <th>id</th>
        <th>subject</th>
        <th>Product Name</th>
        <th>Customer Name</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
     <?php
     include '../include/connect.php';
    $sql = "SELECT 
    customer_queries.id,
    customer_queries.subject, 
    products.product_name as product_name,
    products.id as product_id,
    customers.name as customer_name,
    customers.id as customer_id,
    customer_queries.image
    FROM ((customer_queries
    INNER JOIN products ON customer_queries.product_id = products.id)
    INNER JOIN customers ON customer_queries.customer_id = customers.id)";
   
        $result = mysqli_query($con,$sql);
        // $rows=mysqli_fetch_assoc($result);
        // echo "<pre>";
        // print_r($rows);die();
        if($row=mysqli_fetch_assoc($result)>0)
        {
            foreach($result as $row)
            {
                ?>
                <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['subject'];?></td>
                <td><?php echo $row['product_name'];?></td>
                <td><?php echo $row['customer_name'];?></td>
                <td>
                    <img src="<?php echo "../".$row['image']; ?>"  alt="">        
               </td>
               <td>
               <button class="btn btn-info" width=10px><a href="query_view.php?viewid=<?php echo $row['id']; ?>" class="text-light">View</a></button>
               </td>

                </tr>
                <?php
            }
        }
            
     
      
     
     ?>
    </tbody>
  </table>
  </div>
</div>



<?php include'../main/footer.php' ?>
