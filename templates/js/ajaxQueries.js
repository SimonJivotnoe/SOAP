function listOfAutos()
{
    $.ajax( {
        url   : 'index.php?action=all',
        method: 'GET'
    } ).then( function ( data )
    {
        var objJSON = JSON.parse( data );
        $.each(objJSON, function(key, val){
            $.each(val, function(key, val){
                if ('id' == key) {
                    $('.content' ).append(
                        '<div class="col-md-4 col-md-offset-1 well product" name="'+val+'"></div>');
                } else {
                    $('.content').children().last().append('<h2>'+val+'</h2>');
                }
            })
        })

    } )
}

function details()
{
    $.ajax( {
        url   : 'index.php?action=details',
        method: 'GET'
    } ).then( function ( data )
    {
        var objJSON = JSON.parse( data );
        $.each(objJSON, function(key, val){
            $.each(val, function(key, val){

            })
        })

    } )
}
