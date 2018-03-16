<?php

include( 'constants.php' );
include( 'check_user.php' );

 ?>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.pink-indigo.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <div class="title top-20" style="font-family:'Lobster',cursive;">fruit finder</div>
            <div class="mdl-layout-spacer"></div>

            <?php
            if ( $_SESSION[ 'uid' ] != '' )
            {
            ?>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="play<?php echo $FILE_EXT; ?>">Play</a>
                    <a class="mdl-navigation__link" href="recommendations<?php echo $FILE_EXT; ?>">Recommendations</a>
                </nav>

                <div class="user">
                    <i class="material-icons">person</i>
                </div>
                <div class="username">
                    <?php echo $_SESSION['uid']; ?>
                </div>

                <button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon">
                  <i class="material-icons">more_vert</i>
                </button>

                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                    for="demo-menu-lower-right">
                  <li class="mdl-menu__item" id="logout">Logout</li>
                </ul>
            <?php
            }
            ?>
        </div>
    </header>
    <main class="mdl-layout__content">
        <div class="page-content">
