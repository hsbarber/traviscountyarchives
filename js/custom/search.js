jQuery(function(){
        var $searchlink = $('#searchToggle i');
        var $searchbar  = $('.search-form');

        $('.search a').on('click', function(e){
        e.preventDefault();
            console.log("clicked");
        if($(this).attr('id') == 'searchToggle') {
            if(!$searchbar.is(":visible")) {
            // if invisible we switch the icon to appear collapsable
            $searchlink.removeClass('fa-search').addClass('fa-search-minus');
            } else {
            // if visible we switch the icon to appear as a toggle
            $searchlink.removeClass('fa-search-minus').addClass('fa-search');
            }

            $searchbar.slideToggle(300, function(){
            // callback after search bar animation
            });
        }
        });
});