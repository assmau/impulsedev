/**
 * Created by Àäìèí on 04.03.2016.
 */
$(document).ready(function(){


    function flip() {
        var box = $('#boxhome');
        if (box.hasClass('show-front')) {
            box.removeClass('show-front');
            box.addClass('show-top');
        }
        else if (box.hasClass('show-top')) {
            box.removeClass('show-top');
            box.addClass('show-bottom');
        }
        else if (box.hasClass('show-bottom')) {
            box.removeClass('show-bottom');
            box.addClass('show-front');
        }
        setTimeout(flip,2000);
    }
    flip();



    $(window).scroll(function(){
        if ($(this).scrollTop() > 1100) {
            $('.scrollup').fadeIn();
        } 
        else {
            $('.scrollup').fadeOut();
        }
    });
    $('.scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

    

// При нажатии на кнопку
    $('.button-toggle-nav').click(function() {
        $('body').toggleClass('menu-expanded');
    });
// --------------

// Когда скролится header вниз, появляеться фон
    $(window).scroll(function() {
        if ($(this).scrollTop() > 10){  
        $('.container-fluid.top-line').addClass("roll");
      }
      else{
      $('.container-fluid.top-line').removeClass("roll");
      }
    });

// ---------------

$('.bottom-left-button button').click(function() {
    $('.modal-popup-last, .modal-dialog-last').fadeIn();
    $('.overlay').fadeIn();
});

$('.close').click(function() {
    $('.modal-popup-last, .modal-dialog-last').fadeOut();
    $('.overlay').fadeOut();
});

$('.overlay').click(function(){
	$('.modal-popup-last, .modal-dialog-last').fadeOut();
	$('.modal-popup, .modal-dialog').fadeOut();
});


$('.bottom-right-button button').click(function() {
    $('.modal-popup, .modal-dialog').fadeIn();
    $('.overlay').fadeIn();
});

$('.close').click(function() {
    $('.modal-popup, .modal-dialog').fadeOut();
    $('.overlay').fadeOut();
});

$('.callback').click(function() {
    $('.modal-popup, .modal-dialog').fadeIn();
    $('.overlay').fadeIn();
});

$('.contact-icon button').click(function() {
    $('.modal-popup, .modal-dialog').fadeIn();
    $('.overlay').fadeIn();
});


    var tabContainers = $('div.tabs > div'); 
    tabContainers.hide().filter(':first').show();
    $('div.tabs ul.tabNavigation a').click(function () {
        tabContainers.hide();
        tabContainers.filter(this.hash).show();
        $('div.tabs ul.tabNavigation a').removeClass('selected');
        $(this).addClass('selected');
        return false;
    }).filter(':first').click();




    $(window).scroll(function() {
        if ($(this).scrollTop() > 140){  
        $('.container-fluid.top-line.fixed').addClass("scroll-container-fluid");
      }
      else{
      $('.container-fluid.top-line.fixed').removeClass("scroll-container-fluid");
      }
    });


    $('.header-buttons').click(function() {
        $('.toggle-language').fadeToggle(400);
    });



$(window).load(function() {
    $(".loader").fadeOut("slow");

})
});
