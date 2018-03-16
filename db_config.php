<?php

include( 'constants.php' );

$DB_CHARSET = 'latin1';

// localhost
if ( $_SERVER['SERVER_ADDR'] == $LOCALHOST )
{
    $DB_HOST = $LOCALHOST;
    $DB_USER = 'web_usr';
    $DB_PASS = '';
    $DB      = 'fruit_finder';
}
else
{
    $DB_HOST = 'oniddb.cws.oregonstate.edu';
    $DB_USER = 'lorimorb-db';
    $DB_PASS = 'xITFWyKbDuR2LZKu';
    $DB      = 'lorimorb-db';
}

 ?>
