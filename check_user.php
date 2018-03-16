<?php

include( 'constants.php' );

session_start();

function current_url()
{
    global $LOCALHOST;

    $url  = 'http';
    $url .= ( isset( $_SERVER[ 'HTTPS' ] ) && $_SERVER[ 'HTTPS' ] == 'on' ) ? 's' : '';
    $url .= '://';
    $url .= $_SERVER[ 'SERVER_NAME' ];
    $url .= ( $_SERVER[ 'SERVER_PORT' ] != '80' ) ? ':' . $_SERVER[ 'SERVER_PORT' ] : '';
    $url .= $_SERVER[ 'SCRIPT_NAME' ];

    // keep our urls pretty ;)
    $url  = $_SERVER[ 'SERVER_ADDR' ] == $LOCALHOST ? $url : $url = rtrim( $url, '.php' );

    return $url;
}

function echo_js_redirect( $destination )
{
    echo '<script>location.replace(\'' . $destination . '\');</script>';
}

function check_user( $redirect_here, $no_redirects_at_all = false )
{

    global $LOGIN_URL, $CREATE_ACCOUNT_URL;

    if ( $_SESSION[ 'uid' ] != '' )
    {
        return $_SESSION[ 'uid' ];
    }
    else if ( $redirect_here )
    {
        echo_js_redirect( $LOGIN_URL . '?redirect=' . current_url() . '&cb=' . microtime( true ) );
    }
    else if ( $no_redirects_at_all )
    {
        return false;
    }
    else
    {
        echo_js_redirect( $LOGIN_URL );
    }
}

?>
