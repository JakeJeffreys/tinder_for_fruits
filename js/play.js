$(function()
{

    var IMAGE_URL_PREFIX = 'img/';
    var PREF_POST_URL = 'save_pref.php';
    var REC_GET_URL = 'request_recs.php';

    var image = $( '#item-container img' );
    var title = $( '#item-container .title' );
    var spinner = $( '.spinner-container' );
    var cur_recommendation = null;
    var recommendations = [];

    //load_next_item();

    $( '#like' ).click(function()
    {
        post_user_pref( true );
        load_next_item();
    });

    $( '#dislike' ).click(function()
    {
        post_user_pref( false );
        load_next_item();
    });

    function display_item( item )
    {
        image.attr( 'src', IMAGE_URL_PREFIX + item.image );
        title.html( item.name );
        $( 'table' ).data( 'item', item.id );

        image.show();
        spinner.hide();
    }

    function load_next_item()
    {
        image.hide();
        spinner.show();

        if ( cur_recommendation === null || cur_recommendation + 1 == recommendations.length )
        {
            console.log( "loading recommendations..." );

            cur_recommendation = 0;
            $.ajax({
                url: REC_GET_URL,
                dataType: 'json',
                success: function( data )
                {
                    recommendations = data;
                    display_item( recommendations[ cur_recommendation ] );
                },
            });
        }
        else
        {
            display_item( recommendations[ ++cur_recommendation ] );
        }
    }

    function post_user_pref( like )
    {
        var pref = { pref: (like ? 1 : -1), item: $( 'table' ).data( 'item' ) };

        $.ajax({
            type: 'POST',
            url: PREF_POST_URL,
            data: pref,
        });
    }
});
