<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Anna University Result Registration</title>
  <link rel="stylesheet" type="text/css" href="pro52.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="bg-secondary">



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



<?php
if(isset($_POST['reg1']))
{
  $user_reg1 = $_POST['reg1'];
  $user_name1 = $_POST['name1'];
  $user_dob1 = $_POST['dob1'];
  $user_phone1 = $_POST['phone1'];
  $user_email1 = $_POST['email1'];
  $user_java1 = $_POST['java1'];
  $user_python1 = $_POST['pyhton1'];
  $user_cpro1 = $_POST['cpro1'];
  $user_php1 = $_POST['php1'];
  $user_magento1 = $_POST['magento1'];
  $user_result1 = $_POST['result1'];

  
  $insert_table = "INSERT INTO res (reg_no, name, dob, ph, email, java, python, c_pro, php, magento, result) VALUES ('".$user_reg1."', '".$user_name1."','".$user_dob1."', '".$user_phone1."', '".$user_email1."','".$user_java1."', '".$user_python1."', '".$user_cpro1."', '".$user_php1."', '".$user_magento1."', '".$user_result1."')";
            
  $exc_sql = $conn->query($insert_table);

}


?>
<div class="text-center mt-5">
<p class="link"><a href="stud.php" class="btn btn-primary">Go to Result Page</a></p> 
</div>
<div class="container mt-5 ">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card bg-info">
        <div class="card-body">
          <h2 class="card-title text-center ">Registration Form</h2>
          <form action="" method="post">
            <div class="mb-3">
              <label for="reg1" class="form-label">Registration Number:</label>
              <input type="text" id="reg1" name="reg1" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="na1" class="form-label">Name:</label>
              <input type="text" id="na1" name="name1" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="bi" class="form-label">Date Of Birth:</label>
              <input type="Date" id="bi" name="dob1" class="form-control" required>
            </div>
             <div class="mb-3">
              <label for="ph1" class="form-label">Phone Number:</label>
              <input type="tel" id="ph1" name="phone1" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="em" class="form-label">Email:</label>
              <input type="text" id="em" name="email1" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="ja" class="form-label">Java:</label>
              <input type="text" id="ja" name="java1" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="py" class="form-label">Python:</label>
              <input type="text" id="py" name="pyhton1" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="c" class="form-label">C Program:</label>
              <input type="text" id="c" name="cpro1" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="ph" class="form-label">Php:</label>
              <input type="text" id="ph" name="php1" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="mo" class="form-label">Magento:</label>
              <input type="text" id="mo" name="magento1" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="re" class="form-label">Result:</label>
              <input type="text" id="re" name="result1" class="form-control" required>
            </div>

            <div class="d-grid">
              <input type="submit" class="btn btn-primary" value="Register">
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>