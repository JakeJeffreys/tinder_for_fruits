<?php

include( "../db_functions.php" );

function __compute_item_correlation()
{

    global $DB_HOST, $DB_USER, $DB_PASS, $DB, $DB_CHARSET;

    $mysqli = new mysqli( $DB_HOST, $DB_USER, $DB_PASS, $DB );
    $mysqli->set_charset( $DB_CHARSET );

    $query = "select id from items";
    $res   = mysql_select( $query, $mysqli );

    $items = array();

    while ( $row = $res->fetch_assoc() )
    {
        $items []= $row[ 'id' ];
    }

    foreach ( $items as $item_1 )
    {
        foreach ( $items as $item_2 )
        {
            $query = "select sqrt(sum(abs(like_item))) as norm from user_preferences where item_id=$item_1";
            $item_1_norm = mysql_select( $query, $mysqli )->fetch_assoc()[ 'norm' ];

            $query = "select sqrt(sum(abs(like_item))) as norm from user_preferences where item_id=$item_2";
            $item_2_norm = mysql_select( $query, $mysqli )->fetch_assoc()[ 'norm' ];

            $query = "update item_corr set corr =(
                      select sum( abs(up_1.like_item / $item_1_norm) * abs(up_2.like_item / $item_2_norm) )
                      as corr from user_preferences as up_1,
                      user_preferences as up_2 where up_1.user_id = up_2.user_id and
                      up_1.item_id = $item_1 and up_2.item_id = $item_2) where item_1 = $item_1 and
                      item_2 = $item_2";

            mysql_insert( $query, $mysqli );
        }
    }
}
?>
