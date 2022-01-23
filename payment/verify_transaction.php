<?php
$ref = $_GET['reference'];
if($ref == "") {
  header("Location:javascript://history.go(-1)");
}
?>

<?php
ob_start();
session_start();
include("../../admin/inc/config.php");
include("../../admin/inc/functions.php");
// Getting all language variables into array as global variable
$i=1;
$statement = $pdo->prepare("SELECT * FROM tbl_language");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);             
foreach ($result as $row) {
  define('LANG_VALUE_'.$i,$row['lang_value']);
  $i++;
}
?>
                  

<?php
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
    $Date_time = date('m/d/y h:i:s a', time());

    // include('connection.php');
    include("../admin/inc/config.php");
    include("../admin/inc/functions.php");
    $stmt = $pdo->prepare("INSERT INTO customer_details (status, reference, fullname, date_purchased, email) VALUES (?, ?, ?, ?, ?)");
    $stmt->bindParam("sssss", $status, $reference, $fullname, $Date_time, $Cus_email);

    // $stmt -> bindParam(':status', $status, PDO::PARAM_STR);
    // $stmt -> bindParam (':reference', $reference, PDO::PARAM_STR);
    // $stmt -> bindParam (':fullname', $fullname, PDO::PARAM_STR);
    // $stmt -> bindParam (':date_purchased', $Date_time, PDO::PARAM_STR);
    // $stmt -> bindParam (':email', $Cus_email, PDO::PARAM_STR);


    $stmt->execute($stmt);


//     $data = array($username, $password, $name, $email); 
// $stmta = $this->pdo->prepare("INSERT INTO users (username, password, name, email) VALUES (?, ?, ?, ?)");
// $stmta->execute($data);




    if(!$stmt) {
      echo 'There was a problem on your code' . mysqli_error($con);
    } else {
      header("Location: success.php?status=success");
      exit;
    }
    $stmt->close();
    $con->close();


  } else {
    header("Location: error.html");
    exit;
  }

?>