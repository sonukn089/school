
<div class="row">
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#stream">Add Update Subject Stream</a></li>
		<li><a data-toggle="tab" href="#section">Add Update Section</a></li>
		<li><a data-toggle="tab" href="#class">Add New Class</a></li>
	</ul>

	<div class="tab-content">
		<div id="stream" class="tab-pane fade in active">
			<!-- Start First Menu -->

			<div class="container-fluid bg-info text-center">
				<h1>Welcome To Add or Update Stream Area !</h1>
				<p>This is very important to create Stream first because subject and 			classes requires a valid stream.You should not change stream after 			creating and declare the subjects and classes. If you change it may 		affect your Exam and time table Section.
					If you want to Add a new stream to your school/college, Please type in the stream name into the box given below the stream name and press Add Stream Button.
					To Edit existing stream edit it's name and press Edit Button next to the row. And to Delete a stream simply press Delete Button.
				</p>
			</div>

			<div class="col-md-6">
				<h1 style="background-color: #cceeff; color: black;">Subject Stream</h1>

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

				<h1 style="background-color: #cceeff; color: black;">Stream List</h1>

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
		<!-- End first menu -->


		<!-- Start Second Menu -->
		<div id="section" class="tab-pane fade">

			<div class="container-fluid bg-info text-center">
					<h1>Welcome To Add or Update Stream Area !</h1>
					<p>This is very important to create Stream first because subject and classes requires a valid stream.You should not change stream after creating and declare the subjects and classes. If you change it may affect your Exam and time table Section.
					If you want to Add a new stream to your school/college, Please type in the stream name into the box given below the stream name and press Add Stream Button.
					To Edit existing stream edit it's name and press Edit Button next to the row. And to Delete a stream simply press Delete Button.</p>
				</div>

			<div class="col-md-6">
				<h1 style="background-color: #cceeff; color: black;">Add Section</h1>

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

				<h1 style="background-color: #cceeff; color: black;">Section List</h1>

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
		<!-- End Second Menu -->


		<!-- Start Third Menu -->

		<div id="class" class="tab-pane fade">


				<div class="container-fluid bg-info text-center">
					<h1>Welcome To Add or Update Stream Area !</h1>
					<p>This is very important to create Stream first because subject and classes requires a valid stream.You should not change stream after creating and declare the subjects and classes. If you change it may affect your Exam and time table Section.
					If you want to Add a new stream to your school/college, Please type in the stream name into the box given below the stream name and press Add Stream Button.
					To Edit existing stream edit it's name and press Edit Button next to the row. And to Delete a stream simply press Delete Button.</p>
				</div>
			
			<div class="col-md-6">
				<h1 style="background-color: #cceeff; color: black;">Add New Class</h1>

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


				<h1 style="background-color: #cceeff; color: black;">Class List</h1>

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