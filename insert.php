<?php include('includes/header.php') ?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6 mt-4">
			<h3>How to Insert Data To Realtime Database in PHP</h3>
			<hr>
			<form action="code.php" method="POST">
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="User Name">
			</div>

			<div class="form-group">
				<input type="email" name="email" class="form-control" placeholder="Mail Address">
			</div>

			<div class="form-group">
				<input type="number" name="phone" class="form-control" placeholder="Phone Number">
			</div>

			<div class="form-group">
				<button type="submit" name="save_data" class="btn btn-primary btn-block">Save Data</button>
			</div>
			</form>
		</div>
	</div>
</div>

<?php include('includes/footer.php') ?>

