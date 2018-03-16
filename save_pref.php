<?php

include( 'check_user.php' );
include( 'db_functions.php' );

$user_email = check_user( false );

// Make sure we have an authorized user and that they're passing valid parameters
if ( !( isset( $_POST[ 'pref' ] ) && preg_match( '/^-?1$/', $_POST[ 'pref' ] ) &&
        isset( $_POST[ 'item' ] ) && preg_match( '/^[0-9]+$/', $_POST[ 'item' ] ) &&
        $user_email ) )
{
    http_response_code( 400 );
    exit();
}

if ( $user_email )
{
    $pref = $_POST[ 'pref' ];
    $item = $_POST[ 'item' ];

    $query = "select id from users where email='$user_email'";
    $user_id = mysql_select( $query )->fetch_assoc()[ 'id' ];

    $query = "insert into user_preferences (user_id, item_id, like_item) values($user_id, $item, $pref)";

    if ( !mysql_insert( $query ) )
    {
        // TODO this gets triggered when duplicate entries are made - this should not happen...
        http_response_code( 500 );
    }
}

 ?>
