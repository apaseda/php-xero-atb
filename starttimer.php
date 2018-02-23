<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// session_start();


// // if (!isset($_SESSION['CREATED'])) {
// //     $_SESSION['CREATED'] = time();
// // } else if (time() - $_SESSION['CREATED'] > 1740) {
// //     // session started more than 30 minutes ago

// //     unset($_SESSION['oauth']);

// //     session_regenerate_id(true); // change session ID for the current session and invalidate old session ID

// //     $_SESSION['CREATED'] = time(); // update creation time
// // }

// sleep(25);

// unset($_SESSION['access_token'],$_SESSION['oauth_token_secret']);

// session_destroy();
