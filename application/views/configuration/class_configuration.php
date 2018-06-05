<div class="row">

	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#stream">Add Update Subject Stream</a></li>
		<li><a data-toggle="tab" href="#section">Add Update Section</a></li>
		<li><a data-toggle="tab" href="#class">Add New Class</a></li>
	</ul>

	<div class="tab-content">
		<div id="stream" class="tab-pane fade in active">
			<!-- First Menu -->

			<div class="col-md-6">
				<h1 style="background-color: blue; color: white;">Subject Stream</h1>

				<form class="form-inline" method="post" action="<?= base_url() ?>configure/	
					savestream">
			  		<div class="form-group">
			    		<input type="text" class="form-control" name="sub_stream">
			  		</div>
			  		<button type="submit" class="btn bg-primary">Add Stream</button>
				</form><br>

				<div class="text-info bg-info">Type a stream name and press Add Stream.If stream added successfuly then it show in right side panel where you can change the name and Delete it.</div>

			</div>

			<div class="col-md-6">

				<h1 style="background-color: blue; color: white;">Stream List</h1>

				<?php foreach($stream as $value): ?>

					<form class="form-inline" method="post" action="<?= base_url() ?>configure/	
						editstream"">
				  		<div class="form-group">
				    		<input type="text" name="sub_stream" value="<?= $value->sub_stream; ?>" class="form-control" id="ad">
				    		<input type="hidden" value="<?= $value->id; ?>" name="id">
				  		</div>
				    	<button type="submit" name="action" value="edit" class="btn bg-primary">Edit</button>
				    	<button type="submit" name="action" value="delete" class="btn bg-primary">Delete</button><br><br>
					</form>
				<?php endforeach; ?>
				<div class="text-info bg-info">You can edit or delete stream by press 	
					concern Button it sure that you have not created subject and classes depending edited or Deleted Stream.
				</div>
			</div>		
		</div>

		<!-- Second Menu -->

		<div id="section" class="tab-pane fade">
			<div class="container-fluid bg-primary text-center">
				<h2>Welcome To Add or Update Section Area !</h2>
				Important Instructions about class creation
				Please insure that you have created Stream and Section for Class. This is class creation area. You have to provide class name (Like 1st,8th,12th etc..) and select Class stream (Like : Science, Arts, Commerce etc.) If stream is not applicable then select (none of these). After this select select section if applicable, otherwise none. Leave the teacher's id field blank. Update the teacher's id after it has been created. You can find the teacher's id in the employee detail section.
			</div>
			<div class="col-md-6">
				<h1 style="background-color: blue; color: white;">Class</h1>

				<form class="form-inline" method="post" action="<?= base_url() ?>configure/	
					saveclass">
			  		<div class="form-group">
			    		<input type="text" class="form-control" name="sub_stream">
			  		</div>
			  		<button type="submit" class="btn bg-primary">Add class</button>
				</form><br>

				<div class="text-info bg-info">Type a Section name and press Add Section.If Section added successfuly then it show in right side panel where you can change the name and Delete it.</div>

			</div>

			<div class="col-md-6">

				<h1 style="background-color: blue; color: white;">Stream List</h1>

				<?php foreach($stream as $value): ?>

					<form class="form-inline" method="post" action="<?= base_url() ?>configure/	
						editstream"">
				  		<div class="form-group">
				    		<input type="text" name="sub_stream" value="<?= $value->sub_stream; ?>" class="form-control" id="ad">
				    		<input type="hidden" value="<?= $value->id; ?>" name="id">
				  		</div>
				    	<button type="submit" name="action" value="edit" class="btn bg-primary">Edit</button>
				    	<button type="submit" name="action" value="delete" class="btn bg-primary">Delete</button><br><br>
					</form>
				<?php endforeach; ?>
				<div class="text-info bg-info">You can edit or delete Section by press 
					concern Button it sure that you have not created subject and classes depending Edited or Deleted Section.
				</div>
			</div>
		</div>

		<!-- Third Menu -->

		<div id="class" class="tab-pane fade">
			
			<div class="col-md-6">
				<h1 style="background-color: blue; color: white;">Class</h1>

				<form class="form-inline" method="post" action="<?= base_url() ?>configure/	
					saveclass">
			  		<div class="form-group">
			    		<input type="text" class="form-control" name="sub_stream">
			  		</div>
			  		<button type="submit" class="btn bg-primary">Add class</button>
				</form><br>

				<div class="text-info bg-info">Type a stream name and press Add Stream.If stream added successfuly then it show in right side panel where you can change the name and Delete it.</div>

			</div>

			<div class="col-md-6">

				<h1 style="background-color: blue; color: white;">Stream List</h1>

				<?php foreach($stream as $value): ?>

					<form class="form-inline" method="post" action="<?= base_url() ?>configure/	
						editstream"">
				  		<div class="form-group">
				    		<input type="text" name="sub_stream" value="<?= $value->sub_stream; ?>" class="form-control" id="ad">
				    		<input type="hidden" value="<?= $value->id; ?>" name="id">
				  		</div>
				    	<button type="submit" name="action" value="edit" class="btn bg-primary">Edit</button>
				    	<button type="submit" name="action" value="delete" class="btn bg-primary">Delete</button><br><br>
					</form>
				<?php endforeach; ?>
				<div class="text-info bg-info">You can edit or delete stream by press 	
					concern Button it sure that you have not created subject and classes depending edited or Deleted Stream.
				</div>
			</div>
		</div>

		</div>

	</div>	
</div>