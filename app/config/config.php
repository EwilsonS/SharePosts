<?php
    $url = getenv('JAWSDB_URL');
    $dbparts = parse_url($url);
    
    $hostname = $dbparts['y06qcehxdtkegbeb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com'];
    $username = $dbparts['xdi451c76lr33whn'];
    $password = $dbparts['ehq5appcgg7gsm3y'];
    $database = ltrim($dbparts['i4wapn8jlpv7h5qq'],'/');
    //DB Params
    // define('DB_HOST', 'localhost');
    // define('DB_USER', 'root');
    // define('DB_PASS', 'kalamazoo123');
    // define('DB_NAME', 'shareposts');
    
    //App Root
    define('APPROOT', dirname(dirname(__FILE__)));

    //URL Root
    define('URLROOT','https://limitless-bayou-30385.herokuapp.com');
    
    //site name
    define('SITENAME', 'SharePosts');

    //App version
    define('APPVERSION', '1.0.0');