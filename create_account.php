<?php

    include( 'header.php' );
    include( 'db_config.php' );

    $error        = false;
    $bad_email    = false;
    $bad_password = false;
    $res          = false;

    // redirect parameter sent from previous 'declined' page - will be inserted in form and
    // read from $_POST in if statement below on form submission
    $redirect = isset( $_REQUEST[ 'redirect' ] ) ? $_REQUEST[ 'redirect' ] : 'index' . $FILE_EXT;

    if ( isset( $_POST[ 'email' ] ) && isset( $_POST[ 'password' ] ) )
    {
        $email    = $_POST[ 'email' ];
        $password = $_POST[ 'password' ];

        if ( strlen( $password ) < 4 )
        {
            $bad_password = true;
        }

        $mysqli = new mysqli( $DB_HOST, $DB_USER, $DB_PASS, $DB );
        $mysqli->set_charset( $DB_CHARSET );

        if ( !$bad_password )
        {
            $query = 'select * from users where email = \'' .
                     $mysqli->real_escape_string( $email ) . '\'';
            $res   = $mysqli->query( $query );

            if ( $res->fetch_assoc() )
            {
                $bad_email = true;
            }
        }

        if ( !$bad_email && !$bad_password )
        {
            $hashed_pass = base64_encode( hash( 'sha256', $password . $email ) );

            $query = 'insert into users (email, password) values ' .
                     '(\'' . $mysqli->real_escape_string( $email ) .
                     '\', \'' . $mysqli->real_escape_string( $hashed_pass ) . '\')';
            $res   = $mysqli->query( $query );

            if ( $res )
            {
                $_SESSION[ 'uid' ] = $email;
                echo_js_redirect( $HOME_URL );
            }
            else
            {
                $error = true;
            }
        }
    }
?>

<div class="mdl-grid">

    <div class="title top-40 centered mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet">
        Create an account and find the fruit of your dreams &reg;
    </div>

    <div class="item-box top-40 centered mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet">

        <div class="mdl-cell mdl-cell--4-col centered">
            <form name="login" method="post" action="create_account.php">

                <div class="error" style="display:<?php echo $bad_email ? 'block' : 'none'; ?>">
                    Sorry, that email address is already being used for an account. Please try another.
                </div>

                <div class="error" style="display:<?php echo $error ? 'block' : 'none'; ?>">
                    Sorry, it appears an error occured. Please try again.
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="display:block">
                    <input class="mdl-textfield__input" type="text" id="email" name="email">
                    <label class="mdl-textfield__label" for="user">Email address...</label>
                </div>

                <div class="error" style="display:<?php echo $bad_password ? 'block' : 'none'; ?>">
                    Your password must be at least 4 characters long
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="password" id="password" name="password">
                    <label class="mdl-textfield__label" for="user">Choose a password...</label>
                </div>

                <div id="btn-container" style="margin-top:10px">
                    <button id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" data-target="submit.php">
                        Create Account
                    </button>
                </div>

                <div style="margin-top:10px"><a href="login<?php echo $FILE_EXT; ?>">or login with an existing account</a></div>
            </form>
        </div>
    </div>

</div>

<?php include( 'footer.php' ); ?>
