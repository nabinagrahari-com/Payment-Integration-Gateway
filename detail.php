<!doctype html>
<html>
<head>
<style>
body {
  background-image: url('girl_photo.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
<title>Donation Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS --
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 bg-light mt-5 rounded">
				<h2 class="text-center p-2">Are You Ready For help!</h2>
				<form action="pay.php" method="post"  class="p-2" enctype="multipart/form-data" id="form-box">
					<div class="form-group">
						<input type="text" name="Name" class="form-control" size="20" maxlength="20" autocomplete="off" tabindex="1" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control" maxlength="40" size="12"  autocomplete="off" tabindex="3" placeholder="email" required>
						</div>
					<div class="form-group">
						<input type="number" name="phone" class="form-control" autocomplete="off" tabindex="5" placeholder="Mobile Number" required>
					</div>
					<div class="form-group">
						<input type="number" name="amount" class="form-control" autocomplete="off" tabindex="5" placeholder="Amount" required>
					</div>
					<div class="row justify-content-center">
						<input type="submit" name="submit" value="Donate" class="btn btn-success btn-lg" style='width:100px;margin:0 50%;position:relative;left:-50px;'>
					</div>
				</div>
			</form>
		</div>
	</body>
	</html>


