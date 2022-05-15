<?Php
  require("code.php"); 
  if(isset($_POST['name'], $_POST['username'], $_POST['password'], $_POST['type'])) {
        $name=mysqli_real_escape_string($connection,$_POST['name']);
        $username=mysqli_real_escape_string($connection,$_POST['username']);
        $password=mysqli_real_escape_string($connection,$_POST['password']);
        $type=mysqli_real_escape_string($connection,$_POST['type']);
        mysqli_query($connection, "INSERT INTO users (name, username, password, type) values('$name', '$username', '$password', '$type') ");
        header('location: users.php');
        die();
      }
?>

<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?Php 
  include("dashboard.html")
?>

<main class="main users chart-page" id="skip-target">
<div class="container">
<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">
				
			</div>
		</div>
         <div>
             <div>
         <div class="container ">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="card">
                        <div class="card-header"><strong>New User</div>
                        <div class="card-body card-block">
              
            <div class="container-fluid">
	<div id="msg"></div>
	
	<form method="post" id="manage-user">	
		<input type="hidden" name="id" value="<?php echo isset($meta['id']) ? $meta['id']: '' ?>">
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" class="form-control border border-primary" value="<?php echo isset($meta['name']) ? $meta['name']: '' ?>" required>
		</div> <br>
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" class="form-control border border-primary" value="<?php echo isset($meta['username']) ? $meta['username']: '' ?>" required  autocomplete="off">
		</div><br>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" class="form-control border border-primary" value="" autocomplete="off">
			<?php if(isset($meta['id'])): ?>
			<small><i>Leave this blank if you dont want to change the password.</i></small>
		<?php endif; ?>
		</div><br>
		<?php if(isset($meta['type']) && $meta['type'] == 3): ?>
			<input type="hidden" name="type" value="3">
		<?php else: ?>
		<?php if(!isset($_GET['mtype'])): ?>
		<div class="form-group">
			<label for="type">User Type</label>
			<select name="type" id="type" class="custom-select">
				<option value="2" <?php echo isset($meta['type']) && $meta['type'] == 2 ? 'selected': '' ?>>Staff</option>
				<option value="1" <?php echo isset($meta['type']) && $meta['type'] == 1 ? 'selected': '' ?>>Admin</option>
			</select>
		</div>
		<?php endif; ?>
		<?php endif; ?>
		<div class="d-grid gap-2 d-md-flex justify-content-md-end"> <br>
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary">cancel</button>
        </div>
  </form>
</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
	</div>
</div>
</div>
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
