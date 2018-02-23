<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
// header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

session_start();

// print_r($_SESSION);

if (!isset($_SESSION['CREATED']) && isset($_SESSION['access_token'])) {

    $_SESSION['CREATED'] = time();

} else if (isset($_SESSION['access_token']) && (time() - $_SESSION['CREATED'] > 1740)) {
    // session started more than 29 minutes ago

    unset($_SESSION['access_token'], $_SESSION['oauth_token_secret'], $_SESSION['CREATED']);

    session_destroy();
}

if (isset($_SESSION['access_token'], $_SESSION['oauth_token_secret'])) {

    echo json_encode('true');

} else {

    echo json_encode('false');

}
