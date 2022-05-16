<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">   

<link rel="stylesheet" href="logincss/style.css">

<?Php 
 include("includes/navbar.php");
?>

<<div class="container"> <br> 
<h3 class="t-10 mx-auto text-white text-center py-4 my-4" style="width: 200px;">Events</h3> <hr>

<div class="container">
              <div class="card mb-4 mt-4">
              <div class="card-body">
                  <div class="row">
                  <div class="col-md-10"> 
                          <div class="input-group mb-3 ">
                            <input type="text" class="form-control" id="filter" placeholder="Filter alumni/alumnus" aria-label="Filter" aria-describedby="filter-field">
                          </div>
                      </div>
                      <div class="col-md-2">
                          <button class="btn btn-primary btn-block btn-sm" id="search">Search</button>
                      </div>
                  </div>
                  
              </div>
          </div>
          </div>



<div class="container">
	<div class="col-lg-12">
		<div class="card mt-4 mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
				</div>
				</div>
				<section class="page-section">
        <div class="container text-dark bg-white">      
        
        </div>
</div>
                  <?Php
                  include("code.php");
                   	$i = 1;
                       $events = $connection->query("SELECT * FROM events ");
                       while($row=$events->fetch_assoc()):
                  ?>

<div class="container">
<p> <b><?php echo date("M d, Y h:i A",strtotime($row['schedule'])) ?></b></p>

<p> <b><?php echo ucwords($row['title']) ?></b></p>

<p class="text-right"><?php echo ucwords($row['content'])?></p>
</div>
						<div class="text-center">
						<button class="btn btn-primary" id="participate" type="button">Participate</button>
						</div> <hr>
                        <?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<?Php
 include("includes/footer.php");
?>