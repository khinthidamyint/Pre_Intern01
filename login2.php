<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <title>Login - Admin</title>
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body class="bg-gradient-primary">
 <?php 
  include 'db2.php';
  
  if(!empty($_POST)){

    $email=$_POST['email'];
    $password=$_POST['password'];
    var_dump($email);
    if(empty($email) || empty($password))
    {
        header('Location:../admission/login2.php?error=emptyFields');
        exit();
        // echo "Please Enter Email and Password";
    }
    else
    {
        $servername = "localhost";
        $username = "root";
        $pwd = "";
        $dbname = "admission";
        session_start();
        // Create connection
        $conn = new mysqli($servername, $username, $pwd, $dbname);
        // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql="select * from user"; 
            $match=false;
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $uname = $row['email'];
                    $upassword = $row['password'];            
                    
                    if(($uname==$email ) && ($upassword==$password) ){                    
                        $match='true';
                        
                        break;
                    }          
                }     
            }


            if($match==true)
            {
                session_start();
                $_SESSION['email']=$email;
                $_SESSION['password']=$password;
                // header('Location:../admission/admin_home.php');
                header('Location:../admission/login2.php?correct=gonextpage');                
                exit();
            }
            else{
                header('Location:../admission/login2.php?error=incorrect');
                
            exit();
            }    
        }
}
 ?>

<div class='container-fluid' >

<div class="card" style="width: 40rem;margin-top:200px;margin-left:600px">
  <div class="card-body">
    <h5 class="card-title" style="text-align: center;font-size:18px">Sign In</h5>
    <h6 class="card-subtitle mb-2 text-muted" style="text-align: center;font-size:14px">Please enter your credential information.</h6>
    <p class="card-text" style="text-align: center;">
            <form action='login2.php' method='POST'>
					<div class='form-group'>
						<label for='name'>Email:</label>
						<input type='email' name='email' class='form-control form-control-inline' id='email'>
					</div>
					<div class='form-group'>
						<label for='password'>Password:</label>
						<input type='password' name='password' class='form-control form-control-inline' id='password'>
					</div>

                    <div class="help-inline" id="loginvalidate"> </div>

					<div class="button">
					<button type='submit' class='btn btn-primary btn-md' name='login' id="login" style='color:black;'>Log In</button>
					<button type='reset' class='btn btn-primary btn-md' name='cancel' id="cancel" style='color:black;' >Cancel</button>
                    </div>  
				</form>  
    </p>
      </div>
</div>
       
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  
  <?php
                if(isset($_GET['error']))
                  {
                      if($_GET['error']=='emptyFields'){
                        echo '<script>$("#loginvalidate").html("Pelease Fill Email and Password");</script>';
                        // echo '<script>$("#loginvalidate").hide();</script>';
                        //   $("#loginvalidate").hide();
                        //   echo '<script>alert("Please fill email and password")</script>';
                      }
                      
                      else if($_GET['error']=='incorrect'){
                        echo '<script>$("#loginvalidate").html("Incorrect Mail or Password");</script>';
                    //   echo '<script>alert("Incorrect Mail or Password")</script>';
                      }
                      
                      
                  }  
                  if(isset($_GET['correct']))
                  {
                      if($_GET['correct']=='gonextpage'){
                        echo '<script>$("#loginvalidate").html("You are Login Successful !!!!!!!!!!!!!!!!!!!!!!!!!!!!");</script>';
                        // echo '<script>alert("Login Successful !")</script>';  
                      }
                       
                  }                
                  
                  ?>
</body>

</html>