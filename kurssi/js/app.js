jQuery(function(){
    var menuLink = jQuery('.menu-item').first();
    // console.log(menuLink);

    menuLink.click(function(){
        jQuery('.menu-item:not(:first)').slideToggle(400);
    });
});