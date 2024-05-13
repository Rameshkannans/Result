<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Anna University Result</title>
  <link rel="stylesheet" type="text/css" href="pro52.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!-- DATABASE CONNECTION -->
<?php
session_start();
$host = "localhost";
$userName = "root";
$password = "";
$dbName = "u_result";
	$conn = new mysqli($host, $userName, $password, $dbName);
	if($conn->connect_error){
		die("Connection faild: " . $conn->connect_error);
	}
?>
<!-- DATABASE CONNECTION END-->


<!--GET RESSULT FORM -->
<div class="container  p-4 ">
	<img src="ANNAUNIVERSITYLOGO.png" class="" style="width: 600px;">
  <div class="d-flex float-end">
	<p class="link"><a href="reg.php" class="btn btn-outline-primary">REG</a></p>
  </div>
</div>
<div class="container mt-5 ">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card shadow-lg ">
        <div class="card-body">
          <h5 class="card-title text-center text-success">Anna University Result Nov, Dec 2023</h5>
          <form action="" method="post">
            <div class="mb-3">
              <label for="na" class="form-label">Name:</label>
              <input type="text" id="na" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="re" class="form-label">Register Number:</label>
              <input type="text" id="re" name="regno" class="form-control" required>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Get Result</button>
            </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="text-center mt-4">
<a href="logout.php" class="btn btn-danger">LOGOUT</a>
</div>
<!--GET RESSULT FORM END-->

<!-- SELECT VALUE FROM DATABASE -->
<?php
if (isset($_POST['name'])) {
    $user_name = $_POST['name'];
    $reg_num = $_POST['regno'];
    
    $get_value = "SELECT * FROM res WHERE name='$user_name' AND reg_no='$reg_num' ";
    $store_val = $conn->query($get_value);
    $get_row = mysqli_num_rows($store_val);

    if ($get_row == 1) {
        $row = $store_val->fetch_assoc();
?>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-12 offset-md-3">
	   <table style="width:50%" class="shadow-lg table table-primary table-striped table-hover table-bordered">
        <tr>
          <th colspan="2" class="text-center text-primary">Anna University Results</th>
        </tr>
        <tr>
         <th class="text-center">ID</th>
         <th class="text-center"><?php echo $row['id'] ?></th>
        </tr>
        <tr>
         <th class="text-center">REGISTER NUMBER</th>
         <th class="text-center"><?php echo $row['reg_no'] ?></th>
        </tr>
        <tr>
         <th class="text-center">Name</th>
         <th class="text-center"><?php echo $row['name'] ?></th>
        </tr>
        <tr>
         <th class="text-center">DATE OF BIRTH</th>
         <th class="text-center"><?php echo $row['dob'] ?></th>
        </tr>
        <tr>
         <th class="text-center">PHONE</th>
         <th class="text-center"><?php echo $row['ph'] ?></th>
        </tr>
        <tr>
         <th class="text-center">EMAIL</th>
         <th class="text-center"><?php echo $row['email'] ?></th>
        </tr>
        <tr>
         <td>JAVA</td>
         <td><?php echo $row['java'] ?></td>
        </tr>
        <tr>
         <td>PYTHON</td>
         <td><?php echo $row['python'] ?></td>
        </tr>
         <tr>
         <td>C_PROGRAM</td>
         <td><?php echo $row['c_pro'] ?></td>
        </tr> 
        <tr>
         <td>PHP</td>
         <td><?php echo $row['php'] ?></td>
        </tr> 
        <tr>
         <td>MAGENTO</td>
         <td><?php echo $row['magento'] ?></td>
        </tr>
         <tr>
         <td>RESULT</td>
         <th class="text-success"><?php echo $row['result'] ?></th>
        </tr>
      </table>
    </div>
  </div>
</div>
<?php
    } else { ?>
    <div class="container mt-4">
        <div class="alert alert-info text-center text-danger">
		    <strong>Please Enter Valid Name and Register Number!</strong>
		</div>
	</div>
   <?php }
}
?>


</body>
</html>

