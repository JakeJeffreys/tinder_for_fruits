<?php

    include( 'header.php' );
    include( 'db_config.php' );

    $bad_login = false;

    // redirect parameter sent from previous 'declined' page - will be inserted in form and
    // read from $_POST in if statement below on form submission
    $redirect = isset( $_REQUEST[ 'redirect' ] ) ? $_REQUEST[ 'redirect' ] : $HOME_URL;

    if ( isset( $_POST[ 'email' ] ) && isset( $_POST[ 'password' ] ) )
    {
        $email      = $_POST[ 'email' ];
        $password   = $_POST[ 'password' ];
        $redirect   = isset( $_POST[ 'redirect' ] ) ? $_POST[ 'redirect' ] : $HOME_URL;

        $mysqli     = new mysqli( $DB_HOST, $DB_USER, $DB_PASS, $DB );
        $mysqli->set_charset( $DB_CHARSET );
        $query      = 'SELECT password from users where users.email = \'' .
                      $mysqli->real_escape_string( $email ) . '\'';
        $res        = $mysqli->query( $query );

        if ( $res &&
             $res->fetch_assoc()[ 'password' ] == base64_encode( hash( 'sha256', $password . $email ) ) )
        {
            $_SESSION[ 'uid' ] = $email;
            echo_js_redirect( $redirect );
        }
        else
        {
            $bad_login = true;
        }
    }
?>

<div class="mdl-grid">

    <div class="title top-40 centered mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet">
        Login and find the fruit of your dreams &reg;
    </div>

    <div class="item-box top-40 centered mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet">

        <div class="mdl-cell mdl-cell--4-col centered">
            <form name="login" method="post" action="login<?php echo $FILE_EXT; ?>">

                <input type="hidden" name="redirect" value="<?php echo htmlspecialchars( $redirect ); ?>">

                <div class="error" style="display:<?php echo $bad_login ? 'block' : 'none'; ?>">
                    Incorrect email or password
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="display:block">
                    <input class="mdl-textfield__input" type="text" id="email" name="email">
                    <label class="mdl-textfield__label" for="user">Email...</label>
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="password" id="password" name="password">
                    <label class="mdl-textfield__label" for="user">Password...</label>
                </div>

                <div id="btn-container" style="margin-top:10px">
                    <button id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" data-target="submit.php">
                        Login
                    </button>
                </div>

                <div style="margin-top:10px"><a href="create_account<?php echo $FILE_EXT; ?>">or create a new account</a></div>
            </form>
        </div>
    </div>

</div>

<?php include( 'footer.php' ); ?>
