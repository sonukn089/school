<div class="row">
	<div class="col-md-6">
		<h1 style="background-color: blue; color: white;">Subject Stream</h1>
		<form class="form-inline" method="post" action="<?= base_url() ?>configure/savestream">
		  	<div class="form-group">
		    	<input type="text" class="form-control" name="sub_stream">
		  	</div>
		  <button type="submit" class="btn bg-primary">Add Stream</button>
		</form>

	</div>
	<div class="col-md-6">

		<h1 style="background-color: blue; color: white;">Stream List</h1>

		<?php foreach($stream as $value): ?>

			<form class="form-inline" method="post" action="<?= base_url() ?>configure/editstream"">
			  	<div class="form-group">
			    	<input type="text" name="sub_stream" value="<?= $value->sub_stream; ?>" class="form-control" id="ad">
			    	<input type="hidden" value="<?= $value->id; ?>" name="id">
			  	</div>
			    <button type="submit" name="action" value="edit" class="btn bg-primary">Edit</button>
			    <button type="submit" name="action" value="delete" class="btn bg-primary">Delete</button><br><br>
			</form>
			
		<?php endforeach; ?>

	</div>
</div>