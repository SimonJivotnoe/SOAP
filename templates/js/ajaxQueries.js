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
                        '<div class="col-md-4 col-md-offset-1 well">' +
                        '<div class="product" name="'+val+'"></div>' +
                        '<button class="btn btn-danger order" type="button" name="'+val+'">Order</button></div>');
                } else {
                    $('.content').children().last().find('.product').append('<h2>'+val+'</h2>');
                }
            })
        })
        $('body').fadeIn();
    } )
}

function details(id)
{
    $.ajax( {
        url   : 'index.php?action=details&id=' + id,
        method: 'GET'
    } ).then( function ( data )
    {
        var objJSON = JSON.parse( data );
        if (objJSON.length > 0) {
        $('.content' ).html('<div class="col-md-4 col-md-offset-1 well">' +
        '<div class="details"></div>' +
        '<div><button class="btn btn-danger order" type="button">Order</button></div>' +
        '</div>');
            $.each(objJSON, function(key, val){
                $.each(val, function(key, val){
                    if ('id' == key) {
                        $('.order').attr('name', val)
                    } else {
                        $('.details' ).append('<p>' + key + ': ' + val + '</p>');
                    }
                })
            })
        } else {

        }
    } )
}

function search(searchInput, searchOption)
{
    $.ajax( {
        url   : 'index.php?action=search&searchInput=' + searchInput +
        '&searchOption=' + searchOption,
        method: 'GET'
    } ).then( function ( data )
    {
        var objJSON = JSON.parse( data );
        if (objJSON.length > 0) {
            $('.content' ).html('');
            $.each(objJSON, function(key, val){
                $.each(val, function(key, val){
                    if ('id' == key) {
                        $('.content' ).append('<div class="col-md-4 col-md-offset-1 well">' +
                        '<div class="details"></div>' +
                        '<div><button class="btn btn-danger order" type="button" name="'+val+'">Order</button></div>' +
                        '</div>');
                    } else {
                        $('.content').children().last().find('.details').append('<p>' + key + ': ' + val + '</p>');
                    }
                })
            })
        } else {

        }
    } )
}

function confirmOrder(name, surname, payment, id){
    $.ajax( {
        url   : 'index.php?action=order&name=' + name +
        '&surname=' + surname + '&payment=' + payment + '&id=' + id,
        method: 'GET'
    } ).then( function ( data )
    {
        if (null != data) {
            $('.content' ).html('<span id="successful">successful</span>');
            setTimeout('window.location.href = "/~user1/PHP/SOAP/SOAP/index.php";', 1100);
        } else {

        }
    })
}
