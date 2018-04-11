(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {
    //Responsive Menu
	$('#menu').slicknav();
    
    //wow js 
    new WOW().init();



});

//This code is for add sticky navbar 
  $(window).on('scroll',function() {    
   var scroll = $(window).scrollTop();
   if (scroll <74) {
    $("#sticky_menubar").removeClass("sticky");
   }else{
    $("#sticky_menubar").addClass("sticky");
   }
});




//Back to top
$(window).scroll(function(){
        
        var wScroll = $(this).scrollTop();
        
        var showScrollButton = 5;
        
        if(wScroll > showScrollButton){
            $('#top').fadeIn();  
        }else{
            $('#top').fadeOut();
        }
        
    });
        
    //creating clidk function
    $('#top').click(function(){
        $('body, html').animate({
           scrollTop:0 
        }, 2000);
        return false;
    });



  $(document).ready(function(){
            // Select all links with hashes
            $('a[href*="#"]')
            // Remove links that don't actually link to anything
                .not('[href="#"]')
                .not('[href="#0"]')
                .click(function(event) {
                    // On-page links
                    if (
                        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                        location.hostname == this.hostname
                    ) {
                        // Figure out element to scroll to
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            event.preventDefault();
                            $('html, body').animate({
                                scrollTop: target.offset().top -80 // 145 is a value that shod be offset from top
                            }, 1000, function() {

                                var $target = $(target);
                                $target.focus();
                                if ($target.is(":focus")) { // Checking if the target was focused
                                    return false;
                                } else {
                                    $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                    $target.focus(); // Set focus again
                                };
                            });
                        }
                    }
                });
        });
}(jQuery));