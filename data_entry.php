<?php

    include( 'header.php' );
    include( 'db_functions.php' );

    $query = 'SELECT id, name FROM items;';
    $res   = mysql_select( $query );
?>

<div class="mdl-grid">

    <form id="prefs" action="javascript:void(0);">
        <div class="mdl-cell mdl-cell--8-col centered">

            <h4>Select the fruits and vegetables you like please! Don't forget to press submit when you're done!</h4>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="user" name="user">
                <label class="mdl-textfield__label" for="user">Enter your name...</label>
            </div>

            <?php
                while ( $item = $res->fetch_assoc() )
                {
                    echo '<div class="mdl-cell mdl-cell--4-col">';
                    echo '<input class="mdl-checkbox__input" type="checkbox" name="' . $item[ 'id' ] . '">' . $item[ 'name' ] . '</input>' . '<br>';
                    echo '</div>';
                }
            ?>

            <!-- Raised button with ripple -->
            <div id="btn-container" style="margin-top:10px">
                <button id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" data-target="submit.php">
                    Submit
                </button>
            </div>

        </div>
    </form>
</div>
<?php include( 'footer.php' ); ?>
<script src="js/data_entry.js"></script>
