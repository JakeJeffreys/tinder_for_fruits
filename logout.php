<?php

    include( 'header.php' );

    // log user out and then redirect to login
    $_SESSION[ 'uid' ] = '';
    echo_js_redirect( $LOGIN_URL );

 ?>
