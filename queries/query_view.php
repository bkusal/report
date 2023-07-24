<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer's Queries</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
<div class="container mt-5">
            <div class="row">
                 <div class="col-md-12">
                 <div class="card">
                    <div class="card-header">
                        <h4>View Querie
                        <a href="qdis.php" class="btn btn-info float-end">BACK</a>
                        </h4>
      
  
<?php
        include '../include/connect.php';

        if(isset($_GET['viewid'])){
        $id=$_GET['viewid'];
        $sql="SELECT 
    customer_queries.id,
    customer_queries.subject, 
    products.product_name as product_name,
    products.id as product_id,
    customers.name as customer_name,
    customers.id as customer_id,
    customers.email as customer_email,
    customers.phone as customer_phone,
    customer_queries.image,
    customer_queries.description
    FROM ((customer_queries
    INNER JOIN products ON customer_queries.product_id = products.id)
    INNER JOIN customers ON customer_queries.customer_id = customers.id)";
    
        $result=mysqli_query($con,$sql);
    
        if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        ?>
       
             <div class="mb-3">
                <label>ID</label>
                <p class="form-control">
                <?php echo $row['id'];?>
                </p>
            </div>
            <div class="mb-3">
                <label>Customer Name</label>
                <p class="form-control">
                <?php echo $row['customer_name'];?>
                </p>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <p class="form-control">
                <?php echo $row['customer_email'];?>
                </p>
            </div>
            <div class="mb-3">
                <label>Phone no</label>
                <p class="form-control">
                <?php echo $row['customer_phone'];?>
                </p>
            </div>
            <div class="mb-3">
            <label>Product Name</label>
                <p class="form-control">
                <?php echo $row['product_name'];?>
                </p>
        </div>
                <div class="mb-3">
                <label>Subject</label>
                <p class="form-control">
                <?php echo $row['subject'];?>
                </p>
            </div>
                <div class="mb-3">
                <label>Image</label>
                <p class="">
                <img src="<?php echo "../".$row['image']; ?>" width="135" height="125">
                </p>
                </div>
            <div class="mb-3">
                <label>Description</label>
                <p class="form-control">
                <?php echo $row['description'];?>
                </p>
            </div>
            <div class="card mb-3">
                <label for="reply"></label>
                <textarea name="reply" id="" cols="30" rows="10" placeholder="Reply here" ></textarea>
            </div>
            <div class="mb-3">
                <select name="status" id="">
                    <option value="" class="btn btn-info float-end">Processing</option>
                    <option value="" class="btn btn-success float-end">Solved</option>
                </select>
            </div>
            
    <a href="../email.php"><button class="btn btn-primary w-20 py-2" type="submit" name="Submit">Submit</button></a>
           <?php
        }
        }
        ?>
        </div>
    </div>
     </div>
</div>
</body>
</html>

    





