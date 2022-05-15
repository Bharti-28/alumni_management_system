<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
         
<?Php 
include("dashboard.html");
 include("code.php");
 
    if(isset($_GET['type']) && $_GET['type'] == 'delete' && isset($_GET['id'])) {
      $id = mysqli_real_escape_string($connection, $_GET['id']);
      mysqli_query($connection, "DELETE from gallery where id='$id' ");
    }
?>
<main class="main users chart-page" id="skip-target">

<div class="container">
<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">
				
			</div>
		</div>
    <br><h5 class="fw-bold">Gallery</h5><br> 
    <br><button class="badge bg-primary text-wrap" style="height: 2rem;"><a href="add_course.php"><a href="add_image.php">Add Images</a></a></button>
    <br> <hr>
	<div class="col-lg-12">
		<div class="row">
<br>
			<!-- Table Panel -->
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<b>gallery List</b>
					</div>
					<div class="card-body">
						<table class="table table-bordered table-hover table-primary">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">IMG</th>
									<th class="text-center">About</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i = 1;
								$img = array();
                                $fpath = 'gallery/uploads/gallery';
								$files= is_dir($fpath) ? scandir($fpath) : array();
								foreach($files as $val){
									if(!in_array($val, array('.','..'))){
										$n = explode('_',$val);
										$img[$n[0]] = $val;
									}
								}
								$gallery = $connection->query("SELECT * FROM gallery");
								while($row=$gallery->fetch_assoc()):
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="">
										<img src="<?php echo isset($img[$row['id']]) && is_file($fpath.'/'.$img[$row['id']]) ? $fpath.'/'.$img[$row['id']] :'' ?>" class="gimg" alt="">
									</td>
									<td class="">
										<?php echo $row['about'] ?>
									</td>
									<td class="text-center">
										<button class="btn btn-sm btn-success edit_gallery" type="button" data-id="<?php echo $row['id'] ?>" data-about="<?php echo $row['about'] ?>" data-src="<?php echo isset($img[$row['id']]) && is_file($fpath.'/'.$img[$row['id']]) ? $fpath.'/'.$img[$row['id']] :'' ?>" >Edit</button>
										<button class="btn btn-sm btn-danger delete_gallery" type="button"><a href="gallery.php?id=<?Php echo $row['id'] ?> &type=delete">Delete</a></button>
									</td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<style>
	
	td{
		vertical-align: middle !important;
	}
	img#cimg{
		max-height: 23vh;
		max-width: calc(100%);
	}
	.gimg{
		max-height: 15vh;
		max-width: 10vw;
	}

</style>

    </main>

<?Php 
  include("footer.html")
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



