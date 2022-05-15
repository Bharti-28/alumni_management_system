<?Php 
  include("includes/navbar.php")
 ?>

<link rel="stylesheet" href="logincss/style.css">


<div class="container"> <br> <br>
<h3 class="t-10 mx-auto text-white text-center py-4 my-4" style="width: 200px;">Forums</h3> <hr>

<div class="container">
              <div class="card mb-4 mt-4">
              <div class="card-body">
                  <div class="row">
                      <div class="col-md-8">
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="filter-field"><i class="fa fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" id="filter" placeholder="Filter name,course, etc." aria-label="Filter" aria-describedby="filter-field">
                          </div>
                      </div>
                      <div class="col-md-4">
                          <button class="btn btn-primary btn-block btn-sm" id="search">Search</button>
                      </div>
                  </div>
                  
              </div>
          </div>
          </div>

  	<?php 
      include("code.php");
      $Forum =  $connection->query("SELECT * from forum_topics");
	while($row=$Forum->fetch_assoc()):
  	?>
    <div class="card mb-4">
    	<div class="card-body">
    	
    				<h3 class="text-center"><b><?php echo $row['title'] ?></b></h3>
    			</div>
    		
    			<div class="container">
    				
                    <p><?php echo $row['description'] ?></p>
    				
    				<br>
    				<hr>
    			</div>
    			<?php endwhile; ?>
    		</div>
    	</div>
    </div>
    
</div>


<?Php 
  include("includes/footer.php")
 ?>