<?Php
  require("code.php"); 

  
  $company='';
  $job_title='';

  if(isset($_GET['id'])) {
        $id = mysqli_real_escape_string($connection, $_GET['id']);
        $res = mysqli_query($connection, "select * from careers where id= '$id' ");

        $row = mysqli_fetch_assoc($res);
        $company = $row['company'];
        $job_title = $row['job_title'];

  }


  if(isset($_POST['company'], $_POST['job_title'], $_POST['location'], $_POST['description'])) {
        $company=mysqli_real_escape_string($connection,$_POST['company']);
        $job_title=mysqli_real_escape_string($connection,$_POST['job_title']);
        $location=mysqli_real_escape_string($connection,$_POST['location']);
        $description=mysqli_real_escape_string($connection,$_POST['description']);
        mysqli_query($connection, "INSERT INTO careers (company, job_title, location, description) values('$company', '$job_title', ' $location', '$description') ");
        header("location: joblist.php");
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
                        <div class="card-header"><strong>New Job</div>
                        <div class="card-body card-block">
                        <form method="post" id="manage-career">
				<input type="hidden" name="id" value="" c class="form-control border border-primary">
		<div class="row form-group">
			<div class="col-md-8">
				<label class="control-label">Company</label>
				<input type="text" name="company" value="<?Php echo $company?>"  class="form-control border border-primary" placeholder="Enter your company name" value="">
			</div>
		</div> <br>
		<div class="row form-group">
			<div class="col-md-8">
				<label class="control-label">Job Title</label>
				<input type="text" name="job_title"  value="<?Php echo $job_title?>"   class="form-control border border-primary"  placeholder="Enter job title" value="">
			</div>
		</div><br>
		<div class="row form-group">
			<div class="col-md-8">
				<label class="control-label">Location</label>
				<input type="text" name="location" class="form-control border border-primary"  placeholder="Enter your location" value="">
			</div>
		</div> <br>
		<div class="row form-group">
			<div class="col-md-10">
            <label  class="control-label" for="exampleFormControlTextarea1">Description</label>
           <textarea class="form-control border border-primary"  placeholder="Enter description" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>
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





