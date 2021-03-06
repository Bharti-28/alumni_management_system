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
                     <div class="card"> <div><?Php echo $msg="" ?></div>
                        <div class="card-header"><strong>User Account</div>
                        <div class="card-body card-block">
              
            <div class="container-fluid">
	<div id="msg"></div>
	<form method="post" id="manage-forum">
				<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id']:'' ?>"  class="form-control border border-primary">
		<div class="row form-group">
			<div class="col-md-8">
				<label class="control-label">Name</label>
				<input type="text" name="name"  class="form-control border border-primary" placeholder="Enter your name" value="<?php echo isset($title) ? $title:'' ?>">
			</div>
		</div><br>
		<div class="row form-group">
			<div class="col-md-8">
				<label class="control-label">Username</label>
				<input type="text" name="username"  class="form-control border border-primary" placeholder="Enter your username" value="<?php echo isset($title) ? $title:'' ?>">
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