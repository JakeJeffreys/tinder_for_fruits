<?php

$LOCALHOST = '127.0.0.1';

if ( $_SERVER[ 'SERVER_ADDR' ] == $LOCALHOST )
{
    $FILE_EXT = '.php';
}
else {
    $FILE_EXT = '';
}

$HOME_URL = 'play' . $FILE_EXT;
$LOGIN_URL = 'login' . $FILE_EXT;
$CREATE_ACCOUNT_URL = 'create_account' . $FILE_EXT;
$NUM_RECOMMENDATIONS = 10;

 ?>
