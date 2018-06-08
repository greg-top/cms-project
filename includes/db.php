<?php

#db connection

#create an array with settings to connect to DB
$db['db_host'] = '###';
$db['db_user'] = '###';
$db['db_pass'] = '###';
$db['db_name'] = '###';

#make constants from above settings
foreach ($db as $key => $value) {
    #define("DB_HOST", "localhost"); //pattern how to make a constant
    define( strtoupper($key), $value );
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

#check connection
if ( $connection ) {
    echo "We are connected";
}