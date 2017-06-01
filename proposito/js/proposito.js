function openNav() {
    document.getElementById("stems_sidenav").style.width = "250px";
    document.getElementsByTagName("body").style.marginLeft = "250px";
}
/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("stems_sidenav").style.width = "0";
    document.getElementsByTagName("body").style.marginLeft = "0";
}
/*To ensure that the submenus are displayed either right ot left based on space available.*/
jQuery(function () {
    

    
    
    jQuery('select').material_select();
    window.setInterval(function(){jQuery('.carousel').carousel('next')},6000)
         jQuery('.carousel').carousel();

    
    

  jQuery('.slider').slider({

    interval:5000,
    transition:800,
      indicators:false
     });
    
    
    jQuery('.pt-padding').mouseenter(function () {
        //           alert('hovered');
        jQuery(this).find('div').addClass('waves-effect waves-teal');
        jQuery(this).find('div').first().css({
            'display': 'block'
            , 'padding-left': '7px'
            , 'padding-top': '4px'
        });
    });
    jQuery('.pt-padding').mouseleave(function () {
        //           alert('hovered');
        jQuery(this).find('div').first().css('display', 'none');
    });
    jQuery('.button-collapse').sideNav({
        menuWidth: 300, // Default is 240
        closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    });
    jQuery('.collapsible').collapsible();
    jQuery("#stems-navigation ul:first>li").on('mouseenter mouseleave', function (e) {
        /*calculating the value of the total width of all submenus*/
        var total_width = 0;
        if (total_width == 0) {
            jQuery('ul', this).each(function () {
                total_width += jQuery(this).outerWidth(true);
            });
        }
        if (total_width > 0) {
            var elm = jQuery(this);
            var off = elm.offset();
            var l = off.left;
            var w = total_width;
            var docW = jQuery("#pt_header").width();
            var isEntirelyVisible = (l + w <= docW);
            //        jQuery("#result").text("offset_left: "+l+"total width"+w+"viewport width"+docW);
            if (isEntirelyVisible) {
                jQuery("#stems-navigation ul ul ul").css('left', '100%');
            }
            else {
                jQuery("#stems-navigation ul ul ul").css('left', '-100%');
            }
        }
    });
});