<?php

    /* ---- TIMING ---- */

    $time_start = microtime(true);

    /* -- END TIMING -- */

    include( 'db_functions.php' );
    include( 'vector_functions.php' );

    /* ---- ASSEMBLE USER PREFERENCE VECTORS ---- */

    //$user_pref_vectors = get_user_preference_vectors();

    /* ---- END ---- */


    /*foreach($user_pref_vectors as $users => $items){
       
       echo $users;
       
       for ($i = 0; $i < 133; $i++){
	  echo $user_pref_vecotrs[$users][$i].' ';
       }
    }*/

    // DEBUG
    //for ($i = 0; $i < 133; $i++){
      // echo $user_pref_vectors[8][$i] . ' <> ' . $user_pref_vectors[10][$i] . '<br>';
    //}

    $user_id = 8;
    $recs = array();

    $recs = calculate_recs($user_id);

    foreach($recs as $item_id)
        echo "ITEM: ".$item_id."<br>"; // outputs the top ten items

    //echo '<strong>2 NORM: </strong>' . compute_2norm_diff( $user_pref_vectors[8], $user_pref_vectors[10] );

    /* ---- TIMING ---- */

    $time_end = microtime(true);

    //dividing with 60 will give the execution time in minutes other wise seconds
    $execution_time = ($time_end - $time_start);

    //execution time of the script
    echo '<br>Total Execution Time: '.$execution_time.' Secs';

    /* -- END TIMING -- */
?>
