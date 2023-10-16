<?php
  require_once 'vendor/autoload.php';

  $clientID = '651424043285-umo4qdrlcmv367i42nqtg003q7odevmc.apps.googleusercontent.com';
  $clientSecret = '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';
  $redirectUri = 'http://localhost:8080/PruebaLogin/index.html';

  // create Client Request to access Google API
  $client = new Google_Client();
  $client->setClientId($clientID);
  $client->setClientSecret($clientSecret);
  $client->setRedirectUri($redirectUri);
  $client->addScope("email");
  $client->addScope("profile");

 
?>