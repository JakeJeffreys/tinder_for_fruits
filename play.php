<?php

    include( 'header.php' );
    check_user( true );

?>

<div class="mdl-grid">

    <div class="title top-40 centered mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet">
        Find the fruit of your dreams &reg;
    </div>

    <div class="item-box top-40 centered mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet">

        <table data-id="">

            <td id="dislike" class="swipe-icon red">
                <i class="fa fa-ban fa-lg"></i>
            </td>

            <td id="item-container">
                <img>
                <div class="spinner-container">
                    <div class="mdl-spinner mdl-js-spinner is-active"></div>
                </div>
                <div class="title top-40 centered"></div>
            </td>

            <td id="like" class="swipe-icon green">
                <i class="fa fa-heart fa-lg"></i>
            </td>

        </table>

    </div>

</div>
<?php include( 'footer.php' ); ?>
<script type="text/javascript" src="js/play.js"></script>
