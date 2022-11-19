<?php

include './includes/alert.php';
include './includes/dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/boostrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/design.css" rel="stylesheet">

        <link rel="stylesheet" href="./css/log.css" />
 <title>View User</title>
</head>
<body style="background-image: url('./images/agriland.jpg');">

 <?php
 $select = mysqli_query($conn, "select * from users where Category=1"); 
 
 ?>
  <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5" id="home">
        <a href="index.html" class="navbar-brand d-flex d-lg-none">
            <h1 class="m-0 display-4 text-secondary"><span class="text-white">Farmer</span>Buddy</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="Admin.php" class="nav-item nav-link ">Home</a>
                <a href="AdminProfile.php" class="nav-item nav-link ">Profile</a>
                <a href="FarmerDetail.php" class="nav-item nav-link active">View Users</a>
                <a href="viewqueries.php" class="nav-item nav-link">View Queris</a>
                <a href="AdminLogin.php" class="nav-item nav-link">Logout</a>

            </div>
        </div>
    </nav>
 <div class = "display-container">
 <div class="display"><br><br>
  <h4><b><i>FARMER DETAILS</i></b></h4>
 <table class="table table-dark table-hover table-bordered border-primary mt-5" id="product">
 <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
    </tr>
  </thead>

 <?php
 if(mysqli_num_rows($select)>0){
 while ($row = mysqli_fetch_assoc($select)) { 
   ?>
 <tr>
 
 <td><?php echo $row['Name']; ?></td>
 <td><?php echo $row['Email']; ?></td>
 <td><?php echo $row['Mobile']; ?></td>

 </td>
 </tr>
 <?php }}
 else{?>
     <tr><td colspan = "6">No Users </td></tr>
 <?php } ?>
 
 
 </table>
 
 <a href="SellerDetail.php"  style="color:black; width: 150px; padding:3px; background-color:green; border-radius: 10px; border:2px solid black"><b>View Seller Detail</b></a>
</div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>