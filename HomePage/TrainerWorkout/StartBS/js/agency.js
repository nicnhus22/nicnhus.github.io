/*!
 * Start Bootstrap - Agency Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

$(document).ready(function() {


	var win_width = $( window ).width();
	adjustSliders(win_width);

});

$(window).resize(function(){
	var win_width = $( window ).width();
	adjustSliders(win_width);
});	

function adjustSliders(width){
	if(width < 1350){
		$("#slider_container").css("right","");
		$("#slider_container").css("left","192px");		
	} else {
		$("#slider_container").css("left","")
		$("#slider_container").css("right","58%")
	}
}

function showSliders(){
	var listItems = $("#sliders li");
	listItems.each(function(i, li) {

		setTimeout(function(){

	       	var slider = $(li);
		    slider.animate({
			   marginLeft: "0"
			},500, "linear");

	    },100 + ( i * 100 ));

	});
}


$(window).on('scroll', function() {
    var y_scroll_pos = window.pageYOffset;
    var scroll_pos_test = 300;             // set to whatever you want it to be

    if(y_scroll_pos > scroll_pos_test) {
       	showSliders();
    }
});
