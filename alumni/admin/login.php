<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="logincss/style.css">

    <title>Document</title>
</head>
<body>

<?Php 
 include("code.php");

  //login code
  $msg="";
  
    if(isset($_POST['username']) && isset($_POST['password'])) {
          $username=mysqli_real_escape_string($connection,$_POST['username']);
          $password=mysqli_real_escape_string($connection,$_POST['password']);
          $res=mysqli_query($connection,"select * from users where username='$username' and password='$password' ");
          $count=mysqli_num_rows($res);
          if($count>0) {
            $row=mysqli_fetch_assoc($res);
            $_SESSION['ID'] = $row['id'];
            $_SESSION['NAME'] = $row['name'];
            $_SESSION['USER_NAME'] = $row['username'];
            $_SESSION['PASSWORD'] = $row['password'];
            header('location: home.php');
              
          } 
              else {
                $msg="Please enter correct login details!";
              }
            }

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-3" id="mainNav">
  <div class="container">
    <h3 class="fw-bold text-primary">Alumni Management System</h3>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div >
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active fw-bold" aria-current="page" href="login.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" href="viewalumni.php">Alumni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" href="viewevents.php">Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" href="viewforums.php">Forums</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" href="about.php">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h3 class="text-top fw-bold text-white">Welcome To Alumni!</h3>


<div class="container">
         <div class="login-content">
            <div class="login-form mt-150">
              <form action="" method="post">
               <div class="form-group">
                  <label>USERNAME</label>
                  <input type="username" name="username" class="form-control" placeholder="Username">
               </div>
               <div class="form-group">
                  <label>PASSWORD</label>
                  <input type="password" name="password" class="form-control" placeholder="Password">
              </div>
              <button type="submit" name="login_btn" class="btn btn-primary btn-flat m-b-10 m-t-10 ">LOG IN</button>
              <div class="result_msg"><?Php echo $msg?></div>
              </form>
            </div>
         </div>
      </div>
      <div>
 </div>
<br> <br> <br> <br> <br>
</body>
</html>

<?Php
 include("includes/footer.php");
?>




