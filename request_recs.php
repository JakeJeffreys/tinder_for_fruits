<?php

require_once("check_user.php");
require_once("db_functions.php");
require_once("vector_functions.php");

$recs = array();

// Turn off re-direct and exit if there is no user logged in
$user_id = check_user( false, true );

if ( !$user_id )
{
    http_response_code( 400 );
    exit();
}

$query = "select id from users where email='$user_id'";
$user_id = mysql_select( $query )->fetch_assoc()[ 'id' ];

$query = "select * from user_preferences where user_id=$user_id";
$res = mysql_select( $query );

$random_recs = $res->num_rows ? false : true;

if ( !$random_recs )
    {
    normalize_user_likes( $user_id );

    $query = "select item_corr.item_1 as item, sum(item_corr.corr * user_preferences.normalized_like)
              as rating from item_corr, user_preferences where user_preferences.item_id = item_corr.item_2
              and user_preferences.user_id = $user_id
              and not exists (select * from user_preferences as up2 where
              up2.item_id = item_corr.item_1 and up2.user_id = user_preferences.user_id)
              group by item_corr.item_1 order by rating desc limit 10";
    $res = mysql_select( $query );

    while ( $row = $res->fetch_assoc() )
    {
        $item_id = $row[ 'item' ];

        $query = "select name, image from items where id=$item_id";
        $item = mysql_select( $query )->fetch_assoc();

        $recs []= array(
            'id' => $item_id,
            'name' => $item[ 'name' ],
            'image' => $item[ 'image' ],
        );
    }
}
else
{
    $query = "select id, name, image from items order by rand() limit 10";
    $res = mysql_select( $query );

    while ( $row = $res->fetch_assoc() )
    {
        $recs []= $row;
    }
}

echo json_encode($recs);

?>
