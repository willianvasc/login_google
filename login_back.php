<?php
REQUIRE __DIR__.'/vendor/autoload.php';

use Google\Client as GoogleClient;


// Get $id_token via HTTPS POST.

$client = new Google_Client(['client_id' => '733877546290-k75j4flh07fc4g6k1gitktcdseaure79.apps.googleusercontent.com']);  // Specify the CLIENT_ID of the app that accesses the backend
$payload = $client->verifyIdToken($_POST['credential']);
if (isset($payload['email'])) {
echo "<pre>";
var_dump($payload);
} else {
  // Invalid ID token
}
var_dump($_POST);

?> 