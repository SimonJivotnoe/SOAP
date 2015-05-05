function listOfAutos()
{
    $.ajax( {
        url   : 'index.php?action=all',
        method: 'GET'
    } ).then( function ( data )
    {
        localStorage['products'] = JSON.stringify(JSON.parse( data ));
        var objJSON = JSON.parse( localStorage[ 'products' ] );
        $.each(objJSON, function(key, val){
            $.each(val, function(key, val){
                if ('id' == key) {
                    $('.content' ).append(
                        '<div class="col-md-4 col-md-offset-1 well product" name="'+val+'"></div>');
                } else {
                    $('.content').children().last().append('<h2>'+val+'</h2>');
                    $('#selectSearch').append('<option>'+key+'</option>');
                }
            })
        })
        objJSON = JSON.parse( localStorage[ 'products' ] );
        console.log(objJSON[0]);
        $.each(objJSON[0], function(key, val){
                    $('#selectSearch').append('<option>'+val+'</option>');
        })

    } )
}
