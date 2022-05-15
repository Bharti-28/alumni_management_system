<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<?Php
  include("dashboard.html");
  require("code.php"); 
  if(isset($_POST['save_btn'])) {
       
    $image = $_POST['image'];
    $about = $_POST['about'];

        $course=mysqli_real_escape_string($connection,$mysqli_query);
        mysqli_query($connection, "INSERT INTO gallery (image, about) values('$image', '$about') ");
        header('location: gallery.php');
        die();
      }
?>

<main class="main users chart-page" id="skip-target">
<div class="container">
<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">
				
			</div>
		</div>
         <div>
<!-- FORM Panel -->
<div class="col-md-4">
			<form action="" method="post" id="manage-gallery" class="form-primary">
				<div class="card">
					<div class="card-header">
						    Upload
				  	</div>
					<div class="card-body">
							<input type="hidden" name="id">
							<div class="form-group">
								<label for="" class="control-label">Image</label>
								<input type="file" class="form-control" name="image">
							</div>
							<div class="form-group">
								<img src="<?php echo is_file('gallery/uploads/gallery') ?>" alt="" id="cimg">
							</div>
							<div class="form-group">
								<label class="control-label">Short Description</label>
								<textarea class="form-control" name='about'></textarea>
							</div>
							
					</div>
							
					<div class="card-footer">
						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-sm btn-primary col-sm-3 offset-md-3" name="save_btn"> Save</button>
								<button class="btn btn-sm btn-default col-sm-3" type="button" onclick="$('#manage-gallery').get(0).reset()"> Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
			<!-- FORM Panel -->
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




