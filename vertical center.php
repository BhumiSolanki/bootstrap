<style>
  .vertical-center
  {
		min-hight: 100%;
		min-hight: 100vh;
		display: flex;
		align-items: center;
  }
</style>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/
<body class="bg-dark text-white">
	<div class="jumbotron vertical-center">
		<div class="container mt-2">
			<form action="bootstrap.php" method="post">
				<div class="card bg-secondary">
					<div class="card-body">
						<input type="text" name="txtnum" class="form-control" placeholder="Enter Username"></br>
						<input type="password" name="txtpwd" class="form-control" placeholder="Enter Password"></br>
						<div class="row">
							<div class="col">
								<input type="submit" class="btn btn-primary w-100" value="Log In">
							</div>
							<div class="col">
								<input type="reset" class="btn btn-danger w-100" value="Clear">
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>

						
					
