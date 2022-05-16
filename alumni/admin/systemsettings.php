<!-- BOOTSTRAP LINK -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
<?php
  include("dashboard.html");
  include("code.php");

  $name='';
  $email='';
  $contact='';
  $about_content='';

  if(isset($_GET['id'])) {
        $id = mysqli_real_escape_string($connection, $_GET['id']);
        $res = mysqli_query($connection, "select * from system_settings where id= '$id' ");

        $row = mysqli_fetch_assoc($res);
        $name = $row['name'];
        $email = $row['email'];
		$contact = $row['contact'];
		$about_content = $row['about_content'];

  }
?>

<!-- ! Main -->
<main class="main users chart-page" id="skip-target">
      <div class="container">
      <div class="card col-lg-6">
		<div class="card-body">
			<form action="" id="manage-settings">
				<div class="form-group">
					<label class="control-label fw-bold">System Name</label>
					<input type="text" class="form-control border border-primary" id="name" name="name" value="<?Php echo $name?>" placeholder="Enter system name" required>
				</div><br>
				<div class="form-group">
					<label  class="control-label fw-bold">Email</label>
					<input type="email" class="form-control border border-primary" id="email" name="email" value="<?Php echo $email?>"  placeholder="Enter your email" required>
				</div><br>
				<div class="form-group">
					<label class="control-label fw-bold">Contact</label>
					<input type="text" class="form-control border border-primary" id="contact" name="contact" value="<?Php echo $contact?>" placeholder="Enter your contact" required>
				</div><br>
				<div class="form-group">
					<label class="control-label fw-bold">About Content</label>
					<textarea name="about" class="text-jqte form-control border border-primary" placeholder="Enter about"><?php echo $about_content?></textarea>
        </div><br>
				<div class="form-group">
					<label class="control-label fw-bold">Image</label>
					<input type="file" class="form-control border border-primary" name="img" onchange="displayImg(this,$(this))">
				</div><br>
				<div class="form-group">
					<img src="<?php echo isset($meta['cover_img']) ? 'assets/uploads/'.$meta['cover_img'] :'' ?>" alt="" id="cimg">
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