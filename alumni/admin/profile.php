<?Php
  require("code.php"); 

  if(isset($_POST['name'], $_POST['username'], $_POST['password'])) {
        $name=mysqli_real_escape_string($connection,$_POST['name']);
        $username=mysqli_real_escape_string($connection,$_POST['username']);
        $password=mysqli_real_escape_string($connection,$_POST['password']);
        mysqli_query($connection, "INSERT INTO users (name, username, password) values('$name', '$username', '$password') ");
        header('location: profile.php');
        die();
      }
?>


<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?Php 
   include("dashboard.html")
?>

<!-- ! Main -->
<main class="main users chart-page" id="skip-target">
      <div class="container">
      <div class="card col-lg-6">
		<div class="card-body">
			<form method="post" action="users.php" id="manage-settings"> <br>
                <h5 class="text-center fw-bold">User Profile</h5><br>
                <div class="form-group">
					<label class="control-label fw-bold">User Name</label>
					<input type="text" class="form-control border border-primary" placeholder="Enter your user name" id="name" name="name" required>
                    <!-- value="<?php echo $name; ?>" -->
				</div><br>
				<div class="form-group">
					<label class="control-label fw-bold">Email</label>
					<input type="email" class="form-control border border-primary" placeholder="Enter your email" id="name" name="username" required>
				</div><br>
				<div class="form-group">
					<label class="control-label fw-bold">Birthday</label>
					<input type="date" class="form-control border border-primary" placeholder="Enter your dob" id="contact" name="contact" required>
				</div><br>
				<div class="form-group">
					<label class="control-label fw-bold">Address</label>
					<textarea name="text" class="text-jqte form-control border border-primary" placeholder="Enter your address"></textarea>
        </div><br>
				<div class="form-group">
					<label class="control-label fw-bold">Gender</label>
					<input type="about" class="form-control border border-primary" placeholder="Enter your gender" name="gender">
				</div><br>
                <div class="form-group">
					<label class="control-label fw-bold">Education</label>
					<input type="text" class="form-control border border-primary" placeholder="Enter your education" name="">
				</div><br>		
                <div class="form-group">
					<label class="control-label fw-bold">Work Experience</label>
					<input type="text" class="form-control border border-primary" placeholder="Enter your work experience" name="">
				</div><br>	
                <div class="form-group">
					<label  class="control-label fw-bold">Contact</label>
					<input type="contact" class="form-control border border-primary" placeholder="Enter your contact" id="email" name="email" required>
				</div><br>
                <div class="form-group">
					<label  class="control-label fw-bold">Password</label>
					<input type="password" class="form-control border border-primary"placeholder="Enter your password"  id="email" name="password" required>
				</div><br>
        <div  class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary btn-block col-md-2">Save</button>
        </div>
			</form>
		</div>
	</div>
	<style>
	img#cimg{
		max-height: 10vh;
		max-width: 6vw;
	}
</style>
    </main>

<?Php 
   include("includes/footer.html")
?>

  </div>
</div>
<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>
</body>

</html>