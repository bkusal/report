<?php
session_start(); 

if (!isset($_SESSION['email']) || !isset($_SESSION['auth_user_id'])) {
    header('location: login.php');
    exit();
}
?>
  <!-- <?php 
    if(isset($_SESSION['success_message'])){
        ?>
        <span class="alert alert-success"><?php echo $_SESSION['success_message']; ?></span>
        
        <?php
    }
    ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
     <!-- bootstrap CSS link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  

     <!-- navbar -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <a class="navbar-brand" href="dash.php">CRM System</a>
  <div class="container-fluid">
  <nav class="navbar navbar-expand-lg">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="../products/pdis.php" class="nav-link">Product List</a>
        </li>
        <li class="nav-item">
            <a href="../customer/cdis.php" class="nav-link">Customer List</a>
        </li>
        <li class="nav-item">
            <a href="../queries/qdis.php" class="nav-link">Querie List</a>
        </li>
        
        
        <li class="nav-item">
            <a href="logout.php" class="nav-link float-left" >Logout</a>
        </li>
        
    </ul>
  </div>
</nav>
    <div class="">
        <h3 class="text-center">Manage Admin</h3>
    </div>




    <?php include'../main/footer.php' ?>