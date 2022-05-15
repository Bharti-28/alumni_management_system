<!-- BOOTSTRAP LINK -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
<?php
  include("dashboard.html")
?>

<!-- ! Main -->
<main class="main users chart-page" id="skip-target">
      <div class="container">
      <div class="card col-lg-6">
		<div class="card-body">
			<form action="" id="manage-settings">
				<div class="form-group">
					<label class="control-label fw-bold">System Name</label>
					<input type="text" class="form-control border border-primary" id="name" name="name" value="<?php echo isset($meta['name']) ? $meta['name'] : '' ?>" required>
				</div><br>
				<div class="form-group">
					<label  class="control-label fw-bold">Email</label>
					<input type="email" class="form-control border border-primary" id="email" name="email" value="<?php echo isset($meta['email']) ? $meta['email'] : '' ?>" required>
				</div><br>
				<div class="form-group">
					<label class="control-label fw-bold">Contact</label>
					<input type="text" class="form-control border border-primary" id="contact" name="contact" value="<?php echo isset($meta['contact']) ? $meta['contact'] : '' ?>" required>
				</div><br>
				<div class="form-group">
					<label class="control-label fw-bold">About Content</label>
					<textarea name="about" class="text-jqte form-control border border-primary"><?php echo isset($meta['about_content']) ? $meta['about_content'] : '' ?></textarea>
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