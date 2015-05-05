$( document ).ready( function ()
{
    listOfAutos( );
    $('body').on('click', '.product', function(){
        var id = $(this).attr('name');
        details(id);
    })
});
