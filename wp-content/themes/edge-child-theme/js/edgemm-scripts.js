(function($){

$( ".collapse" ).find( ".collapse-trigger" ).click(function(){
    $(this).parents( ".collapse" ).toggleClass( "open" );
})

})(jQuery);