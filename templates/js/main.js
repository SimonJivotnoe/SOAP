$( document ).ready( function ()
{
    listOfAutos( );
    $('body').on('click', '.product', function(){
        console.log($(this).attr('name'));
    })
});
