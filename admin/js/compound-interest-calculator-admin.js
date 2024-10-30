(function( $ ) {
})( jQuery );

jQuery(document).ready(function($){
    $('.my-color-field').wpColorPicker();
});

function copyToClipboard(element) {
    var $temp = jQuery("<input>");
    jQuery("body").append($temp);
    $temp.val(jQuery(element).text()).select();
    document.execCommand("copy");
    jQuery("#block1").remove();

    jQuery("#block2").show().animate({left: '250px'});


    $temp.remove();

}


