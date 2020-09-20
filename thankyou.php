<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#008000" />
    <title>Payment Successful</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h1 class="text-center">Thankyou For Your Help!</h1>
        <?php
        include 'instamojo/Instamojo.php';
  
  $api =new  Instamojo\Instamojo('test_03be32f39f69d838907d3a5f7a1','test_2bf9f7b4bd0b8cc7d7125ff0be4','https://test.instamojo.com/api/1.1/');
  $payid=$_GET['payment_request_id'];
  try{
    $response=$api->paymentRequestStatus($payid);
    ?>
    <h2>Payment Details</h2>
    <table class="table table-bordered">
      <tr>
        <th>You have donated :</th>
        <td><?= $response['purpose']; ?></td>
      </tr>
      <tr>
        <th>Payment ID :</th>
        <td><?= $response['payments'][0]['payment_id']; ?></td>
      </tr>
      <tr>
        <th>Payee Name :</th>
        <td><?= $response['payments'][0]['buyer_name']; ?></td>
      </tr>
      <tr>
        <th>Payee Email :</th>
        <td><?= $response['payments'][0]['buyer_email']; ?></td>
      </tr>
    </table>
    <?php
  }
  catch(Exception $e){
    print("Error: ".$e->getMessage());
  }
  ?>
</div>
</div>
</div>
</body>
</html>
      </div>
    </div>
  </div>
</body>
</html>