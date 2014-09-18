(function($) {

// 
//var pixelRatio = !!window.devicePixelRatio ? window.devicePixelRatio : 1;
// 
//$(window).on("load", function() {
//    if (pixelRatio > 1) {
//        $.getJSON('http://edgemmsite.staging.wpengine.com/wp-content/themes/edge-child-theme/function-retina-images.php', function(data) {
//            console.log( data );
//            $('img').each(function(){
//                var $$ = $(this);
//                // check it's not an external link
//                //if ($$.attr('src').lastIndexOf("http://", 0) !== 0 || $$.attr('src').lastIndexOf("http://edgemm", 0) === 1) {
//            
//                    var imgIndex = data.indexOf($$.attr('src')); // is the image in the JSON?
//            
//                    if (imgIndex >= 0) {
//            
//                        $$.attr('src', data[imgIndex].replace(".","@2x."));
//                    }
//                //}
//            });
//        });
// 
//    }
//});

var pixelRatio = !!window.devicePixelRatio ? window.devicePixelRatio : 1;

$(document).ready( function() {
    if ( pixelRatio > 1 ) {
        var img = $( "#header #logo img" );
        var imgSrc = img.attr( "src" );
        img.attr( "src", imgSrc.replace("logo.","logo@2x.") );
    }
});


}( jQuery ));