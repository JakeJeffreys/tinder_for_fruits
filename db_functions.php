<?php

require_once( 'db_config.php' );

// NOTE make sure to call mysqli::real_escape_string on parameters before inserting into $query
function mysql_select( $query, $mysqli = null )
{
    global $DB_HOST, $DB_USER, $DB_PASS, $DB, $DB_CHARSET;

    if ( $mysqli === null )
    {
        $mysqli = new mysqli( $DB_HOST, $DB_USER, $DB_PASS, $DB );
        $mysqli->set_charset( $DB_CHARSET );
    }

    if ($mysqli->connect_errno)
    {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    }

    $res = $mysqli->query( $query );

    return $res ? $res : null;
}

// NOTE make sure to call mysqli::real_escape_string on parameters before inserting into $query
function mysql_insert( $query, $mysqli = null )
{
    global $DB_HOST, $DB_USER, $DB_PASS, $DB, $DB_CHARSET;

    if ( $mysqli === null )
    {
        $mysqli = new mysqli( $DB_HOST, $DB_USER, $DB_PASS, $DB );
        $mysqli->set_charset( $DB_CHARSET );
    }

    if ($mysqli->connect_errno)
    {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    }

    $res = $mysqli->query( $query );

    return $res === true;
}

function get_user_preference_vectors()
{
    $user_pref_vectors = array();

    $query = 'SELECT id FROM items';
    $num_items = mysql_select( $query )->num_rows;

    $query = 'SELECT users.id AS user_id, items.id AS item_id, user_preferences.like_item as like_item ' .
             'FROM items JOIN user_preferences ON user_preferences.item_id = items.id ' .
             'JOIN users ON user_preferences.user_id = users.id;';
    $res = mysql_select( $query );

    while ( $item = $res->fetch_assoc() )
    {
        $user_id   = (int) $item[ 'user_id' ];
        $item_id   = (int) $item[ 'item_id' ];
        $like_item = (int) $item[ 'like_item' ];

        if ( !array_key_exists( $user_id, $user_pref_vectors ) )
        {
            // have to add 1 because item_id's start at 1 but array indexes start at 0
            $user_pref_vectors[ $user_id ] = array_fill( null, $num_items + 1, null );
        }

        $user_pref_vectors[ $user_id ][ $item_id ] = $like_item;
    }

    return $user_pref_vectors;
}

function normalize_user_likes( $user_id )
{
    $query = "select sum(abs(like_item)) as sum from user_preferences where user_id=$user_id";
    $sum = mysql_select( $query )->fetch_assoc()[ 'sum' ];

    $query = "update user_preferences set normalized_like=(like_item / $sum) where user_id=$user_id";
    mysql_insert( $query );
}

?>
