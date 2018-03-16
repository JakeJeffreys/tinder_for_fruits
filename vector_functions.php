<?php

require_once("db_functions.php");
require_once("constants.php");

function compute_2norm_diff( array $vector_1, array $vector_2 )
{
    // cannot compute 2-norm if not same dimension
    assert( count( $vector_1 ) == count( $vector_2 ) );

    $two_norm = 0;

    for ( $i = 0; $i < count( $vector_1 ); $i++ )
    {
        if ( $vector_1[ $i ] === null || $vector_2[ $i ] === null )
        {
            continue;
        }

        $two_norm += pow( $vector_1[ $i ] - $vector_2[ $i ], 2 );
    }

    return $two_norm;
}



/* This function will be used to calculate the top ten recs
for a user and then return the array filled with those recs */
function calculate_recs($current_user)
{
    // Get the number of items
    $query = 'SELECT COUNT(*) AS count FROM items';
    $num_items = mysql_select( $query )->fetch_assoc()['count'] + 1;

    $norms = array(); // used for the norms for each user compared to the current_user
    $recs = array(); // used for holding the top ten recs

    $user_pref_vectors = get_user_preference_vectors();

    $random_recs = $user_pref_vectors[$current_user] === null ? true : false;

    if ( !$random_recs )
    {
        foreach($user_pref_vectors as $user => $items){

           if($user != $current_user){ // if user is different from current user
               $norms[$user] = compute_2norm_diff( $user_pref_vectors[$current_user], $user_pref_vectors[$user]);
           }
        }

        $random = 0;
        $count = 0;

        asort($norms); // sort the array recs from high to low

        // loops through the top users
        foreach($norms as $user => $norm){

            for($i = 0; $i < $num_items; $i++){

                if(count($recs) == 10) // once the rec array has 10 values
                    break;

                if($user_pref_vectors[$current_user][$i] === null){ // if current user hasn't liked

                    if($user_pref_vectors[$user][$i] == 1){ // if the top norm users liked it

                        if(!in_array($i, $recs)){// check if item is already in the top recs array

                            array_push($recs, $i);  // push to array if item is not in array yet


                        }
                    }
                }
            }
        }
    }

    if(count($recs) != 10){

        while(count($recs) != 10){

            $random = mt_rand(0, 133);

            if(!in_array($random, $recs)){ // check if item is already in the top recs array
                array_push($recs, $random);  // push to array if item is not in array yet
            }
        }
    }


    return $recs;
}

?>
