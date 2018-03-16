$(function() {

    $( '#submit' ).click(function() {

        if ( $( '#user' ).val() == '' )
        {
            $( '#btn-container' ).append( '<span style="color:red">You must enter a name at the top of the page :)</span>' );
            return;
        }

        var url = $( this ).data( 'target' );
        var data = $( '#prefs' ).serialize();

        $.ajax({
            type: 'POST',
            url: url,
            data: data,

            success: function() {
                $( 'body' ).html( 'Success! Thanks for your help. ');
            }
        });
    });
});
