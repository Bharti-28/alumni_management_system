<?Php
  require("code.php"); 

  $title='';
  $schedule='';
  $content='';

  if(isset($_GET['id'])) {
        $id = mysqli_real_escape_string($connection, $_GET['id']);
        $res = mysqli_query($connection, "SELECT * from events where id= '$id' ");

        $row = mysqli_fetch_assoc($res);
        $title = $row['title'];
        $schedule = $row['schedule'];
        $content = $row['content'];

  }

  if(isset($_POST['title'], $_POST['schedule'], $_POST['content'])) {
        $title=mysqli_real_escape_string($connection,$_POST['title']);
        $schedule=mysqli_real_escape_string($connection,$_POST['schedule']);
        $content=mysqli_real_escape_string($connection,$_POST['content']);
        mysqli_query($connection, "INSERT INTO events (title, schedule, content) values('$title', '$schedule', '$content' ) ");
        header('location: events.php');
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
                        <div class="card-header"><strong>New Event</div>
                        <div class="card-body card-block">
                        <form  method="post" action="" id="manage-career">
				<input type="hidden" name="id" class="form-control border border-primary">
		<div class="row form-group">
			<div class="col-md-8">
				<label class="control-label">Events</label>
				<input type="text" name="title" value="<?Php echo $title?>" class="form-control border border-primary" placeholder="Enter event title">
			</div>
		</div> <br>
		<div class="row form-group">
			<div class="col-md-8">
				<label class="control-label">Schedule</label>
				<input type="text" name="schedule"  value="<?Php echo $schedule?>" class="form-control border border-primary" placeholder="Enter event schedule">
			</div>
		</div><br>
		<div class="row form-group">
			<div class="col-md-10">
            <label  class="control-label" for="exampleFormControlTextarea1">Description</label>
           <textarea class="form-control border border-primary" value="<?Php echo $content ?>" placeholder="Enter event description" name="content" type="text"  id="exampleFormControlTextarea1" rows="3"></textarea>
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







