<?php
    $name=$_POST['Name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $amount=$_POST['amount'];

include 'instamojo/Instamojo.php';
$api = new Instamojo\Instamojo('test_03be32f39f69d838907d3a5f7a1', 'test_2bf9f7b4bd0b8cc7d7125ff0be4', 'https://test.instamojo.com/api/1.1/');


try {
    $response = $api->paymentRequestCreate(array(
            "purpose" => "Donate the needy" ,
            "amount" => $amount,
            "send_email" => true,
            "email" => $email,
            "donar_name" =>$name,
            "phone"=>$phone,
            "send_sms" => true,
            "allow_repeated_payments" =>false,
        "redirect_url" => "http://localhost/project/thankyou.php"
        )
    );
    $pay_url=$response['longurl'];
    header("location:$pay_url");
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
?>
