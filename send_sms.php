<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;
$numtotext = '+61416492519';
// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC8c97f50c9a52f9456991666398c73e2e';
$auth_token = '80bd9f01fd5e8b25e1ecb2357fde39b8';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+18184950475";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    $numtotext,
    array(
        'from' => $twilio_number,
        'body' => 'UNSW Makerspace says your print has failed!'
    )
);