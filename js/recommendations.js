$(function()
{

    var IMAGE_URL_PREFIX = 'img/';
    var REC_GET_URL = 'request_recs.php';

    var image = $( '#item-container img' );
    var title = $( '#item-container .title' );
    var spinner = $( '.spinner-container' );
    var cur_recommendation = null;
    var recommendations = [];


    $.ajax({
        url: REC_GET_URL,
        dataType: 'json'
        success: function( item )
        {
          image.attr( 'src', IMAGE_URL_PREFIX + item.image );
          title.html( item.name );
          $( 'table' ).data( 'item', item.id );
        },
    });


});
