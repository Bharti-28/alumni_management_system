<!-- BOOTSTRAP -->
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
			<div class="container">
			<div class="col-md-12">
				<div class="card">
				<div class="card-header">
						<h5 class="fw-bold">Events</h5>
					<div class="d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary btn-sm col-sm-2"><a href="add_events.php">+ New Event</a></button>
        </div>
					<div class="card-body">
						<table class="table table-condensed table-bordered table-hover table-primary">
							<colgroup>
								<col width="5%">
								<col width="20%">
								<col width="15%">
								<col width="30%">
								<col width="15%">
								<col width="15%">
							</colgroup>
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="">Schedule</th>
									<th class="">Title</th>
									<th class="">Description</th>
									<th class="">Commited To Participate</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
                  if(isset($_GET['type']) && $_GET['type'] == 'delete' && isset($_GET['id'])) {
                    $id = mysqli_real_escape_string($connection, $_GET['id']);
                    mysqli_query($connection, "DELETE from events where id='$id' ");
                  }


								$i = 1;
								$events = $connection->query("SELECT * FROM events ");
								while($row=$events->fetch_assoc()):
									$trans = get_html_translation_table(HTML_ENTITIES,ENT_QUOTES);
									unset($trans["\""], $trans["<"], $trans[">"], $trans["<h2"]);
									$desc = strtr(html_entity_decode($row['content']),$trans);
									$desc=str_replace(array("<li>","</li>"), array("",","), $desc);
									$commits = $connection->query("SELECT * FROM event_commits where event_id =".$row['id'])->num_rows;
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="">
										 <p> <b><?php echo date("M d, Y h:i A",strtotime($row['schedule'])) ?></b></p>
									</td>
									<td class="">
										 <p> <b><?php echo ucwords($row['title']) ?></b></p>
									</td>
									<td>
										 <p class="truncate"><?php echo strip_tags($desc) ?></p>
									</td>
									<td>
										 <p class="text-right"><?php echo $commits ?></p>
									</td>
									<td class="text-center">
										<button class="btn btn-sm btn-primary view_event" type="button" style="height: 2rem;" ><a href="viewevents.php">View</a></button>
										<button class="btn btn-sm btn-success edit_event" type="button" style="height: 2rem;" ><a href="add_events.php?id=<?Php echo $row['id'] ?> &type=edit">Edit</a></button>
										<button class="btn btn-sm btn-danger delete_event" type="button" style="height: 2rem;"><a href="events.php?id=<?Php echo $row['id'] ?> &type=delete">Delete</a></button>
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