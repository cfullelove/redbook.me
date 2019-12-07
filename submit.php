<?php

// submit.php

$body = sprintf( "Name: %s\n\nEmail: %s\n\nCompany: %s\n\nComments: %s", $_POST['name'], $_POST['email'], $_POST['company'], $_POST['comments']);


curl_setopt_array($ch = curl_init(), array(
  CURLOPT_URL => "https://api.twilio.com/2010-04-01/Accounts/AC1e3e6e2177b8749bcc0141ae6dab7438/SMS/Messages.json",
  CURLOPT_POSTFIELDS => array(
    "Body" => $body,
    "From" => "+14245437402",
    "To" => "+61408741926",
  ),
  CURLOPT_USERPWD => 'AC1e3e6e2177b8749bcc0141ae6dab7438:501bdbf04421884f98a95c8ce2ab8ef8',
  CURLOPT_RETURNTRANSFER => FALSE ));
ob_start();
curl_exec($ch);
ob_end_clean();
curl_close($ch);

header( "Location: /thanks.html" );

?>