<?php 
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "newsletter");

$email = $_POST['email'];

//Remove any whitespaces
$email = trim($email);

// Use filter_var to validate the email address
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Email address is invalid
    echo "Invalid email address.";
} else {
    // Use mysqli_real_escape_string to escape any special characters for the database
    $email = mysqli_real_escape_string($conn, $email);

    $secret = '6LdohwwkAAAAAGQkyBIOMVQ_uVpEEg58aN9wMnoU';
    $response = $_POST['g-recaptcha-response'];
    
    $verify = curl_init();
    curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($verify, CURLOPT_POST, true);
    curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query(array(
                'secret' => $secret,
                'response' => $response
            )));
    curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
    $responseData = json_decode(curl_exec($verify));
    curl_close($verify);
    
    if($responseData->success) {
        // The token is valid and the user is not a bot
        // You can now proceed with the form submission
        $curl = curl_init();
        $data = array(
          'id' => '',
          'email' => $email
          );
          $new_data = json_encode($data);
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://nmttest-8e3c.restdb.io/rest/aaaaa',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => $new_data	,
          CURLOPT_HTTPHEADER => array(
            'x-apikey: e1b767bbd1b2d55f6167e7932b4086221375e',
            'Content-Type: application/json'
          ),
        ));
        
        $response = curl_exec($curl);
        curl_close($curl);
        $rep = json_decode($response, true);
        if (isset($rep['_id'])) {
          echo "done";
        } else {
          echo "already";
        }
    } else {
        echo "invalid";
    }
   
}

?>