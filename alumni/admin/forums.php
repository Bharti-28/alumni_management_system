<!-- BOOTSTRAP LINK -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<?Php 
  include ("code.php");
  include("dashboard.html")
?>


  <!-- ! Main -->
<main class="main users chart-page" id="skip-target">
      <div class="container">
	<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">
				
			</div>
		</div>
		<div class="row">
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card">
				<div class="card-header">
						<h5 class="fw-bold">Forums</h5>
					<div class="d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary btn-sm col-sm-2"><a href="add_forums.php">+ New Job</a></button>
        </div>
					<div class="card-body">
						
						<table class="table table-bordered table-condensed table-hover table-primary">
							<colgroup>
								<col width="5%">
								<col width="15%">
								<col width="30%">
								<col width="10%">
								<col width="10%">
							</colgroup>
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="">Topic</th>
									<th class="">Description</th>
									<th class="">Comments</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								 if(isset($_GET['type']) && $_GET['type'] == 'delete' && isset($_GET['id'])) {
								   $id = mysqli_real_escape_string($connection, $_GET['id']);
								   mysqli_query($connection, "DELETE from forum_topics where id='$id' ");
								 }


								$i = 1;
								$Forum =  $connection->query("SELECT * from forum_topics");
								while($row=$Forum->fetch_assoc()):
									 $trans = get_html_translation_table(HTML_ENTITIES,ENT_QUOTES);
								        unset($trans["\""], $trans["<"], $trans[">"], $trans["<h2"]);
								        $desc = strtr(html_entity_decode($row['description']),$trans);
								        $desc=str_replace(array("<li>","</li>"), array("",","), $desc);
								        $count_comments=0;
								        $count_comments = $connection->query("SELECT * FROM forum_comments where topic_id = ".$row['id'])->num_rows;
								?>
								<tr>
									
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="">
										 <p><b><?php echo ucwords($row['title']) ?></b></p>
										 
									</td>
									<td class="">
										 <p class="truncate"><b><?php echo $desc ?></b></p>
										 
									</td>
									<td class="text-right">
										 <p><b><?php echo number_format($count_comments) ?></b></p>
										 
									</td>
									<td class="text-center">
										<a class="btn btn-sm btn-primary view_forum" href="viewforums.php" target="_blank" data-id="<?php echo $row['id'] ?>" >View</a>
										<button class="btn btn-sm btn-success edit_forum" type="button" data-id="<?php echo $row['id'] ?>" >Edit</button> <br>
										<button class="btn btn-sm btn-danger delete_forum" type="button" style="height: 2rem;"><a href="forums.php?id=<?Php echo $row['id'] ?> &type=delete">Delete</a></button>
									</td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<style>
	
	td{
		vertical-align: middle !important;
	}
	td p{
		margin: unset
	}
	img{
		max-width:100px;
		max-height: :150px;
	}
</style>
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


