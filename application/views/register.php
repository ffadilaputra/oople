<?php $this->load->view('partials/header') ?>
<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Register title</h3>
				</div>
				<div class="panel-body">
					<?php echo form_open('Login/register'); ?>
						<legend>Register Here</legend>					
						<div class="form-group">
							<label for="">Username</label>
							<input type="text" class="form-control" name="username" placeholder="Username">
						</div>
						<div class="form-group">
							<label for="">Password</label>
							<input type="password" class="form-control" name="password" placeholder="Password">
						</div>
						
						<button type="submit" class="btn btn-primary">Submit</button>
					<?php echo form_close(); ?>
				</div>
			</div>
			</div>
		</div>		
	</div>	

<?php $this->load->view('partials/footer') ?>