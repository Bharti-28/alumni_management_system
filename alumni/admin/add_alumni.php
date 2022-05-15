<?Php
  require("code.php"); 
  if(isset($_POST['firstname'], $_POST['course_graduate'])) {
        $firstname=mysqli_real_escape_string($connection,$_POST['firstname']);
        $course_graduate=mysqli_real_escape_string($connection,$_POST['course_graduate']);
        mysqli_query($connection, "INSERT INTO alumnus_bio (firstname, course_graduate) values(' $firstname', ' $course_graduate') ");
        header("location: alumnilist.php");
        die();
      }
?>


<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<?Php
  include("dashboard.html");
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
                        <div class="card-header"><strong>New Alumni</div>
                        <div class="card-body card-block">
                        <form method="post" id="manage-career">
				<input type="hidden" name="id" value="" c class="form-control border border-primary">
		<div class="row form-group">
			<div class="col-md-8">
				<label class="control-label">Name</label>
				<input type="text" name="firstname"  class="form-control border border-primary" value="">
			</div>
		</div> <br>
		<div class="row form-group">
			<div class="col-md-8">
				<label class="control-label">Course Graduate</label>
				<input type="text" name="course_graduate"  class="form-control border border-primary" value="">
			</div>
		</div><br>
		
       <div> <br><br><br>
       <div class="d-grid gap-2 d-md-flex justify-content-md-end"> <br>
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary">cancel</button>
        </div>
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




