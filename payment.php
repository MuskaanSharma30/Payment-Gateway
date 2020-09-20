<?php

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Amount = $_POST['Amount'];
$Phone = $_POST['phone'];
$purpose = 'Donation';

include 'instamojo/Instamojo.php';
$api = new Instamojo\Instamojo('test_4501b6f9420c0780fac47e8022e', 'test_005ffe19501611998d065ef596c', 'https://test.instamojo.com/api/1.1/');

try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $purpose,
        "amount" => $Amount,
        "send_email" => true,
        "email" => $Email,
        "buyer_name" => $Name,
        "phone" => $phone,
        "send_sms" => true,
        "allow_repeated_payments" => false,
        "redirect_url" => "https://donateindia1.000webhostapp.com/redirect.html"
    ));
    $pay_url = $response['longurl'];
    header("location: $pay_url");
} catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
