$(document).ready(function() {
    $(".fancybox").fancybox();

    // reset
    $('#agree1').prop('checked',true);
    $("input[name='gm']").prop('checked',false);
    $('#no-OE').prop('checked',false);
    $('#yes-OE').prop('checked',false);
    $("input[name='nissan']").prop('checked',false);
    $("input[name='fca']").prop('checked',false);
    $("input[name='tba']").prop('checked',false);
    $("input[name='others']").prop('checked',false);

    // "I am hereby applying..." checkbox
    $('.do-you-agree').on('change', function(){
        if( $('#agree1').prop('checked') == false){
            $('#agree1').prop('checked',false);
            $('.btn-cr-submit')
                .addClass('btn-cr-disabled')
                .attr('disabled','disabled');
        } else{
            $('#agree1').prop('checked',true);
            $('.btn-cr-submit')
                .removeClass('btn-cr-disabled')
                .removeAttr('disabled','disabled');
        }
    })

    $('.applicant-qs').on('change',function() {
        //toggle GM dropdown for radio buttons
        if( $("input[name='gm']").prop('checked') == true ){
            $('.gm-dropdown').fadeIn('fast');
        } else {
            $('.gm-dropdown').fadeOut('fast');
            $('#no-OE').prop('checked',false);
            $('#yes-OE').prop('checked',false);
        }
        // GM radio no button message
        if( $('#no-OE').prop('checked') == true ){
            $('.radio-no-msg').fadeIn('fast');
        }else {
            $('.radio-no-msg').fadeOut('fast');
        }
        // toggle disabled state of Submit button
        if( ($("input[name='gm']").prop('checked') == true && $("input[name='oeconnection']:checked").length == 0) || $('#agree1').prop('checked') == false ) {
            $('.btn-cr-submit')
                .addClass('btn-cr-disabled')
                .attr('disabled','disabled');
        } else {
            $('.btn-cr-submit')
                .removeClass('btn-cr-disabled')
                .removeAttr('disabled','disabled');
        }
    })
});