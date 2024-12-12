<?php
require 'vendor/autoload.php';

$client = new Google_Client();
$client->setApplicationName('Google Sheets API PHP Quickstart');
$client->setScopes(Google_Service_Sheets::SPREADSHEETS_READONLIY);
$client->setAuthConfig('credentials.json');
