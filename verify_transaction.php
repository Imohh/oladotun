<?php
$ref = $_GET['reference'];
if($ref = "") {
  header("Location:javascript://history.go(-1)");
}

  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($ref),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_b0c00287324c3096cc4f99f79f1c0412e6e893d9",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    // echo $response;
    $result = json_decode($response);


  }
  if($result->data->status === 'success') {
    $status = $result->data->status;
    $reference = $result->data->reference;
    $lname = $result->data->customer->last_name;
    $fname = $result->data->customer->first_name;
    $fullname = $lname . $fname;
    $Cus_email = $result->data->customer->email;
    date_default_timezone_set('Africa/Lagos');
    $Date_time date('m/d/y h:i:s a', time());

    include('funtions/function.php');
    $stmt = $con->prepare("INSERT INTO customer_details (status, reference, fullname, date_purchased, email)")

  } else {
    header("Location: error.html")
  }

?>