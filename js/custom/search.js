
 jQuery(document).ready(function() {
  var searchbar  =  jQuery('#searchbar');

    jQuery('#navbar-content a').on('click', function(e){
        if(jQuery(this).attr('id') == 'searchtoggle') {
            if(!searchbar.is(":visible")) {
            // if invisible we switch the icon to appear collapsable
            jQuery("#searchtoggle > svg").removeClass('fa-search').addClass('fa-search-minus');
            } else {
            // if visible we switch the icon to appear as a toggle
            jQuery("#searchtoggle > svg").removeClass('fa-search-minus').addClass('fa-search');
            }

            searchbar.slideToggle(300, function(){
            // callback after search bar animation
            });
        }
    });
});