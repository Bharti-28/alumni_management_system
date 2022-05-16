<?Php
  require("code.php"); 

  $title='';
  $description='';

  if(isset($_GET['id'])) {
        $id = mysqli_real_escape_string($connection, $_GET['id']);
        $res = mysqli_query($connection, "select * from forum_topics where id= '$id' ");

        $row = mysqli_fetch_assoc($res);
        $title = $row['title'];
        $description = $row['description'];

  }

  if(isset($_POST['title'], $_POST['description'])) {
        $title=mysqli_real_escape_string($connection,$_POST['title']);
        $description=mysqli_real_escape_string($connection,$_POST['description']);
        mysqli_query($connection, "INSERT INTO forum_topics (title, description) values('$title', '$description') ");
        $msg="Data saved sucessfully!";
        header('location: forums.php');
        die();
      } else {
        $msg="Data not saved!";
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
                     <div class="card"> <div></div>
                        <div class="card-header"><strong>New Forum</div>
                        <div class="card-body card-block">
              
            <div class="container-fluid">
	<div id="msg"></div>
	<form method="post" id="manage-forum">
				<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id']:'' ?>"  class="form-control border border-primary">
		<div class="row form-group">
			<div class="col-md-8">
				<label class="control-label">Title</label>
				<input type="text" name="title"  class="form-control border border-primary" placeholder="Enter forum title" value="<?php echo isset($title) ? $title:'' ?>">
			</div>
		</div><br>
		<div class="row form-group">
			<div class="col-md-12">
				<label class="control-label">Description</label>
				<textarea name="description"  class="form-control border border-primary" placeholder="Enter forum description"><?php echo isset($description) ? $description : '' ?></textarea>
			</div>
		</div> <br>
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
