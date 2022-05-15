<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">   

<link rel="stylesheet" href="logincss/style.css">

<?Php 
 include("includes/navbar.php");
?>

<div class="container"> <br> <br>
<h3 class="t-10 mx-auto text-white py-4 my-4" style="width: 200px;">Alumni/Alumnus List</h3> <hr>

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

          <div class="container-fluid mt-3 pt-2">
             
             <div class="row-items">
             <div class="col-lg-12">
                 <div class="row">
             <div class="col-md-4 item">
             <div class="card alumni-list" data-id="">
                     <div class="alumni-img" card-img-top>

                         <img src="" alt="">
                     </div>
                 <div class="card-body">
                     <div class="row align-items-center h-20">
                        <?Php 
                           include("code.php");
                           $i = 1;
                           $jobs =  $connection->query("SELECT * from alumnus_bio");
								while($row=$jobs->fetch_assoc()):
                        ?>
                             <div class="avatar">
									 <img src="http://localhost/alumni-management-system/alumni/admin/assets/uploads/1602730260_avatar.jpg" class="img-thumbnail rounded mx-auto d-block" style="width: 100px; height: 100px;"  alt="">
									</div>
                             <hr class="divider w-50" style="max-width: calc(100%)">
                             <p class="filter-txt">Name:  <?php echo ucwords($row['firstname']), ucwords($row['lastname'])?><b></b></p>
                             <p class="filter-txt">Course Graduated:  <?php echo $row['course_graduate'] ?><b></b></p>
                             <p class="filter-txt">Course ID:  <?php echo $row['course_id'] ?><b></b></p>
                             <p class="filter-txt">Email:  <?php echo $row['email'] ?><b></b></p>
                             <p class="filter-txt">Batch: <?php echo $row['batch'] ?> <b></b></p>
                                 <br>
                             </div>
                         </div>
                     </div>
                     <?php endwhile; ?>

                 </div>
             </div>
             <div class="card-body">
             <?php echo $i++ ?>
                          
                 </div>
             </div>
             <br>
             </div>
             </div>
             </div>
             </div>
         </div>
</div>




<?Php
 include("includes/footer.php");
?>