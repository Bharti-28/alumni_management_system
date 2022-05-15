<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<?Php
  include("dashboard.html");
  require("code.php"); 
  if(isset($_POST['course'])) {
        $course=mysqli_real_escape_string($connection,$_POST['course']);
        mysqli_query($connection, "INSERT INTO courses (course) values('$course') ");
         header('location: courselist.php');
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
         <div class="container ">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-8">
                     <div class="card">
                        <div class="card-header"><strong>Course Name</div>
                        <div class="card-body card-block">
                           <form method="post">
							   <div class="form-group">
							
								<input type="text" value="" name="course" placeholder="Enter your course name" class="form-control border border-primary" required></div>
							   <br>
							   <button  type="submit" class="btn btn-primary">
							   Submit
							   </button>
							  </form>
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



                  
