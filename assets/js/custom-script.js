
jQuery(document).ready(function() {
    //initially hide rightsideUpBtn
    jQuery('#rightsideUpBtn').hide();

    jQuery('#updsideDownBtn').click(function() {
        //toggle table visibility
        jQuery('#programEventAgenda').toggleClass('d-none');

        //check if table is now visible
        if (jQuery('#programEventAgenda').is(':visible')) {
            //if table visible, hide updsideDownBtn and show rightsideUpBtn
            jQuery('#updsideDownBtn').hide();
            jQuery('#rightsideUpBtn').show();
        } else {
            //if table not visible, show updsideDownBtn and hide rightsideUpBtn
            jQuery('#updsideDownBtn').show();
            jQuery('#rightsideUpBtn').hide();
        }
    });

    //add click event for rightsideUpBtn to hide table and toggle buttons
    jQuery('#rightsideUpBtn').click(function() {
        jQuery('#programEventAgenda').addClass('d-none');
        jQuery('#updsideDownBtn').show();
        jQuery('#rightsideUpBtn').hide();
    });
});
