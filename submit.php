<?php

include( 'db_functions.php' );

if ( isset( $_REQUEST['user'] ) )
{
	$user = $_REQUEST[ 'user' ];
	$user_id = null;
	$success = true;

	$query = 'INSERT INTO users (email) ' . 'VALUES(\'' . $user . '\')';
	if ( mysql_insert( $query ) )
	{
		$query = 'SELECT id FROM users WHERE email = \'' . $user . '\';';
		$res = mysql_select( $query )->fetch_assoc();
		$user_id = $res[ 'id' ];
	}

	if ( !$user_id )
	{
		echo 'Error';
		exit();
	}

	foreach ( $_REQUEST as $item => $value )
	{
		if ( $item != 'user' && $value == 'on' )
		{
			$query = 'INSERT INTO user_preferences (user_id, item_id) '
		             . 'VALUES(\'' . $user_id . '\', \'' . $item . '\')';
			$success &= mysql_insert( $query );
		}
	}

	if ( $success )
	{
		echo 'Success';
	}
	else
	{
		echo 'Error';
	}
}

?>
