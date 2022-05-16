<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- TABLE COURSE -->

<?Php 
  include ("code.php");
  include("dashboard.html");
   if(isset($_GET['type']) && $_GET['type'] == 'delete' && isset($_GET['id'])) {
     $id = mysqli_real_escape_string($connection, $_GET['id']);
     mysqli_query($connection, "DELETE from courses where id='$id' ");
   }

   $res=mysqli_query($connection, "SELECT * from courses");
?>

<main class="main users chart-page" id="skip-target">
<div class="container">
<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">
				
			</div>
		</div>
         <div>
         <div class="col-md-12">
			<div class="card">
				<div class="card-header">
			 <br><h5 class="fw-bold">Course List</h5> 
       <div class="d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary btn-sm col-sm-2"><a href="add_alumni.php">+ New Course</a></button>
        </div> <br>
		 <table class="table table-bordered table-primary">
  <thead>
    <tr>
      <th scope="col" width="10%">Sr. No</th>
      <th scope="col" width="10%">Id</th>
      <th scope="col" width="30%">Course</th>
      <th scope="col" width="30%">Action</th>
    </tr>
  </thead>
  <tbody>
	  <?Php
	  $i=1; 
	  while($row=mysqli_fetch_assoc($res)) { ?>
    <tr>
      <td><?Php echo $i ?></td>
      <td><?Php echo $row['id'] ?></td>
      <td><?Php echo $row['course'] ?></td>
	  <td>
	  <button class="badge bg-success text-wrap" style="height: 2rem;" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href="add_course.php?id=<?php echo $row['id']?>">Edit</a></button> 
	  <button class="badge bg-danger text-wrap" style="height: 2rem;"><a href="courselist.php?id=<?Php echo $row['id'] ?> &type=delete">Delete</a></button> 
	</td>
    </tr>
	<?Php
    $i++;
} ?>
  </tbody>
</table>
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







         
