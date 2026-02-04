

   


$(document).ready(function() {
    'use strict';
    var winWidth = $( window ).width();
	var winHeight = $( window ).height();
if ($('.grid').length > 0 ){
      var $grid = $('.grid').imagesLoaded( function() {	  
            $grid.masonry({
                itemSelector: '.grid-item',
                columnWidth: '.grid-sizer',
                gutter: 0
            });
        });
    }
    
      $(".view-archive a.toggle").click(function() {
        var elem = $(this).text();
        if (elem == "Show Archive") {
          $(this).text("Hide Archive");
          $(this).parents('.date-description').find(".archivetext").slideDown(function(){
            $(this).css({'display': 'block'});      
          });
        } else {
          $(this).text("Show Archive");
          $(this).parents('.date-description').find(".archivetext").slideUp();
        }
      });  
    
    
    if($(window).width() > 900){ 
         $('.subNav').mouseover(function(){
             $('a#business-unitscroll').addClass('active_over');  
         });

        $('.subNav').mouseout(function(){
             $('a#business-unitscroll').removeClass('active_over');  
         }); 
    }    
        
 $(".edgefancybox").fancybox({
    width  : 900,
    height : 300,
    type   :'iframe' 
});
    
    var mapsectionHeight = $('.locationRight').height();
    console.log(mapsectionHeight);
    $('div#gmap_canvas').css({'height': mapsectionHeight});
    
    
    $('form.searchBlock input.searchBlock-submit').click(function(event){
      $('form.searchBlock input.searchBlock-input').css({'width':'100','opacity':'1'});
        event.stopPropagation();
    });
    $('body').not('form.searchBlock input.searchBlock-submit').on("click", function () {
        $('form.searchBlock input.searchBlock-input').css({'width':'0','opacity':'0'});
    });
    
    $('.sustainability').click(function() {
        $('.sliderContent').fadeOut();
        $('.stories-video01').fadeIn(function() {
            $('.stories-video-close01').fadeIn();
            $('iframe#stories-video01').attr('src', 'https://www.youtube.com/embed/HGjgj5J-z44?autoplay=1&amp;controls=1&amp;showinfo=0&amp;rel=0&amp;mute=0');
        });
    });
    $('.stories-video-close01 i').click(function() {
        $('.sliderContent').fadeIn();
        $('.stories-video01').fadeOut(function() {
            $('.stories-video-close01').fadeOut();
            $('iframe#stories-video01').attr('src', 'https://www.youtube.com/embed/HGjgj5J-z44?autoplay=0&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;mute=0');
        });
    });
// denim
$('.lnjdenim-video').click(function() {
    $('.lnj-sliderContent').fadeOut();
    $('.lnj-stories-video01').fadeIn(function() {
        $('.lnj-stories-video-close01').fadeIn();
        $('iframe#lnj-stories-video01').attr('src', 'https://www.youtube.com/embed/qhjpV9U03tI?autoplay=1&amp;controls=1&amp;showinfo=0&amp;rel=0&amp;mute=0');
    });
});
$('.lnj-stories-video-close01 i').click(function() {
    $('.sliderContent').fadeIn();
    $('.lnj-stories-video01').fadeOut(function() {
        $('.lnj-stories-video-close01').fadeOut();
        $('iframe#lnj-stories-video01').attr('src', 'https://www.youtube.com/embed/qhjpV9U03tI?autoplay=0&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;mute=0');
    });
});


  if($(window).width() <= 768){  
  
    $('.our-history-slider-thumb').slick({
        slidesToShow: 3, 
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        autoplay: false,
        centerMode: false,
        focusOnSelect: true,
        responsive: [
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  }
    
	
    
    
    $('footer ul li a').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top - 84
        }, 500);
        return false; 
    }); 

    if($(window).width() <= 480){
        $('.sustainableSrviceImg ul').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            speed: 2000,
            dots: false,
            arrows: false
        });
    }

    $('.awardsAria ul').slick({ 
      dots: false,
      infinite: true,
      autoplay: true,
      speed: 200,
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay:true,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    }); 
    
    
    
    //down arrow
	$('.scroll-down-arrow, #business-unitscroll').click(function(e) {
		e.preventDefault();
        $('html, body').animate({
			scrollTop: $('#jamp').offset().top - 84
		},1000);
    });
    
        
    if( winWidth > 900){
        $('header nav ul li a').hover(function(){
            var subnavSize = $(this).parent().find('.subNav').size();
            console.log(subnavSize);
            if(subnavSize > 0){
                $('.overlaybg').toggleClass('hover');
            }
        });
    }
    
    if( winWidth <= 900){
        $('header nav ul li a').each(function(){
            var subnavSizeMobile = $(this).parent().find('.subNav').size();
            if(subnavSizeMobile > 0){
                $(this).append('<i class="fa fa-plus plusMinus" aria-hidden="true"></i>');
            }
        });
        /*$('header nav ul li .subNav ul li a').each(function(){
            var yarnsSubMenuSizeMobile = $(this).parent().find('.yarnsSubMenu').size();
            if(yarnsSubMenuSizeMobile > 0){
                $(this).append('<i class="fa fa-plus plusMinus" aria-hidden="true"></i>');
            }
        });*/
        
        
        $('body').on('click', 'header nav ul li a', function() {
        //$('header nav ul li a').click(function(){
            $('.subNav:visible').slideUp(function(){
                $(this).prev('header nav ul li a').find('i').removeClass('fa-minus').addClass('fa-plus');
            });
            
            $(this).next('.subNav:hidden').slideDown();
            $(this).find('i').addClass('fa-minus').removeClass('fa-plus');
        });
        
        
        
        $('.productDetails.accordion li a').click(function(){
            $('.discriptionshow').slideUp(function(){
                $(this).prev('.productDetails.accordion li a').find('i').removeClass('fa-angle-up').addClass('fa-angle-down');
            });		

            $(this).next('.discriptionshow:hidden').slideDown();
            $(this).find('i').addClass('fa-angle-up').removeClass('fa-angle-down');
        });
        
        
    }
	 
	if($(window).width() < 600){
		$('.filter_button').unbind('click');
		$('.filter_button').click(function(){
			$('.melangColorBox.new').slideToggle();
			$(this).toggleClass('minus');
		});
		
		$('.melangColorBox.new ul li').click(function(){
			$('html').animate({ scrollTop : ($('#scroll_To_It').offset().top - 150) }, 2000); 
		}); 
	}
	
	
    
    //navigationLeft();
    
    if( winWidth <= 1023 ){
        $('header').addClass('fixedHeader');
    }
    else{
        $('header').removeClass('fixedHeader');
    }
    
	$('.fancybox').fancybox({
        helpers: {
            overlay: {
              locked: false
            }
        }
    });
    /*
    if(winWidth <= 900){
        $('#toggle').toggle(function() {
            $('.navigationBlock').animate({left: '0'});
        }, function() {
            $('.navigationBlock').animate({left: '-80%'});
        });
    } else {
        $('#toggle').toggle(function() {
            $('.navigationBlock').animate({left: '0'});
        }, function() {
            $('.navigationBlock').animate({left: '-40%'});
        });
    }
    */
    if ($('.captionSlider .item').size() > 1) {
        $('.captionSlider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            speed: 1000,
            dots: true, 
            arrows: false,
            fade: true,
            adaptiveHeight: false
        });
    }
    
    /*$('.homeSlider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 1000,
        dots: false,
        adaptiveHeight: true
    });*/
    
    $('.brandsSlider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 3000,
        speed: 1000,
        adaptiveHeight: true
    });
    
    $('.collections-slider').slick({
      dots: false,
      infinite: false,
      autoplaySpeed: 1000,
      speed: 500,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        }
      ]
    });
    
    $('.clientsSlider').slick({
      dots: false,
      infinite: true,
      autoplaySpeed: 1000,
      speed: 500,
      autoplay: true,
      slidesToShow: 6,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 6,
            slidesToScroll: 1,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        }
      ]
    });
    
var jump=function(e) {
   
    if (e){
       e.preventDefault();
       var target = jQuery(this).attr("href");
    }else{
       var target = location.hash;
    }
    if(jQuery(target).size() >0){
        jQuery('html,body').animate(
        {
           scrollTop: jQuery(target).offset().top - 84
        },2000,function()
        {
           location.hash = target;
        });
    }
}

jQuery('a[href^=#]').bind("click", jump);

if (location.hash){
    setTimeout(function(){
        jQuery('html, body').scrollTop(60).show();
        jump();
    }, 0);
}else{
    jQuery('html, body').show();
}

jQuery('.group-cont-caption a').click(function(){
    jQuery('html,body').animate({scrollDown: jQuery('#group-first, #group-second , #group-third, #group-fourth').offset().top - 60}, 1500);
});
    
    
/* */ //Sticky header bar
    $(window).scroll( function() {     
      
      if( winWidth >= 1024 ){
          var currentscroll = $(window).scrollTop();
               if(currentscroll > $('header').height() ){
                   $('header, .wrapper').addClass('fixed');
               } 
                else{
                    $('header, .wrapper').removeClass('fixed');
                }
		
				
      }
        else{
            var currentscroll = $(window).scrollTop();
               if(currentscroll > $('header').height() ){
                   $('header, .wrapper').addClass('fixed');
               } 
                else{
                    $('header, .wrapper').removeClass('fixed');
                }
        }
        
    });
/* */ 
    
	
	
    mobileMenu();
    
    HomeSliderHeight();
    
    //window resize function
	$( window ).resize(function() {
        var winWidth = $( window ).width();
        var winHeight = $( window ).height();
        
        sticysidebar();//sticy sidebar
        mobileMenu();
        
        HomeSliderHeight();
        //navigationLeft();
    
	});
    $('.loader').fadeOut();
    $(window).load(function(){

    $('.loader').fadeOut();
        //alert();
        //navigationLeft();
        if(winWidth >= 601){
            var SliderContentHeight = $('.SliderContent img').height();
            //console.log(SliderContentHeight);
            $('.sliderContentLeft').height(SliderContentHeight - 68);
            
            /*$('#toggle').click(function(){
                $('.navigationBlock').animate({left: "0"})
            });*/
        }
        
        if(winWidth <= 600){
            var SliderContentHeight = $('.SliderContent img').height();
            $('.sliderContentLeft').height(SliderContentHeight);
        }
        
        sticysidebar();//sticy sidebar
        
        /* Brands Page Start */
        if (winWidth >= 768) {
            var OurBrands = $('.OurBrands .col.span_7 img').height();
            $('.brandsCont').height(OurBrands);
        }
        /* Brands Page End */
        
       
        
    });
    
    //home page
    
    $('.productDetails.accordion li a').click(function(){
        $('.discriptionshow').slideUp(function(){
            $(this).prev('.productDetails.accordion li a').find('i').removeClass('fa-angle-up').addClass('fa-angle-down');
        });		

        $(this).next('.discriptionshow:hidden').slideDown();
        $(this).find('i').addClass('fa-angle-up').removeClass('fa-angle-down');
    });
    
    /*
    $(".melangProductArea ul li a#inline").fancybox({
        wrapCSS : 'someClass',
        width: '100%',
        height: 'auto',
        maxWidth: 750        
	});
    */
    
function homeheight() {
        winHeight = $(window).outerHeight();
        $('.topFixedSlider .homeVideo').css( 'height', winHeight );
    }
    
function navOffsetLeft(){
        $('#nav > ul > li').each(function(){
        var menuOffset = $(this).offset();
        //console.log(menuOffser.left + 25);

            $(this).find('.level0.darknav').css('padding-left' , menuOffset.left + 5);

        });
    }
    
function navigationLeft(){
        var navigationOffset = $('header .navBar #toggle').offset();
        console.log(navigationOffset);
        $('.navigationBlock').find('nav').css('padding-left' , navigationOffset.left);
    }
    
//Sticy sidebar
function sticysidebar(){
    winWidth = $(window).width();
    winHeight = $(window).height();
    if( winWidth >=1023) {
        $('.fix').each(function(index, element) {

            var itemwidth = $(element).width();
            var itemheight = $(element).height();
            var itempos = $(element).offset().top;
            var hHeight = parseInt($('header').height());

            var parentoffset =  ($(element).parents('.fixparent').height() + $(element).parents('.fixparent').offset().top) - $(element).height();

            $(element).css({'width':itemwidth+'px', top:0,});

            //console.log('itempos: '+itempos +','+'itemwidth: '+itemwidth +','+'itemheight: '+itemheight +','+'parentoffset: '+parentoffset);	


            if(!$(element).parent().hasClass('fixcontainr')){		
                $(element).wrap('<div class="fixcontainr" style="width:'+itemwidth+'px; height:'+itemheight+'px; position:relative"></div>');
            }


                $(window).scroll(function() {
                    var csroll = $(window).scrollTop()+hHeight;



                    if(csroll >= itempos && csroll <= parentoffset){
                        $(element).css({'position':'fixed', top:hHeight+'px', 'margin-top':0,});
                    }


                    else if(csroll < itempos){
                        $(element).css({'position':'absolute', 'margin-top':0, top:0+'px',});		
                    }

                    else if(csroll > parentoffset){
                        $(element).css({'position':'absolute', 'margin-top':parentoffset-($(element).parents('.fixparent').offset().top), top:0+'px'});	
                    }



                } );



    });
    }


}
    
function mobileMenu(){
    var wWidth = $(window).width();
    var wHeight = $(window).height();
    if( wWidth <= 900 ) {
    //mobile menu icon animation
    $('#toggle').click(function() {
        var margin = parseInt($('.wrapper').css('right'));
        $('.wrapper').width(wWidth);
        if( margin < 1 ) {
            $(this).addClass('open'); 
            $('.wrapper').stop().animate({
                'right': 250,
            }, 600);
            $('.col.span_10 nav').show(600);
        }
        else{
            $(this).removeClass('open'); 
            $('.wrapper').stop().animate({
                'right': 0,
            }, 600);
            $('.col.span_10 nav').hide();
        }

		
        /*$('.mobileMenu > ul > li, .mobileMenu > ul > li div.level0 .container > ul > li').each(function() {
             $(this).find('.plusMinus:gt(0)').remove();
            //console.log($(this).find('div.level1').size());
            if($(this).find('div.level0, div.level1').size() > 0 ){
                $(this).append('<i class="fa fa-plus plusMinus" aria-hidden="true"></i>');
            }
        });
        

        $('body').unbind('click')
        $('body').on('click', '.plusMinus', function() {
            
            
           //$('div.level0:visible, div.level1:visible').slideUp(function() {
            $(this).parent().children('div:visible').slideUp(function() {
                $(this).parent().find('.plusMinus').removeClass('fa-minus').addClass('fa-plus');                
           }); 
            $(this).parent().siblings().children('div:visible').slideUp(function() {
                $(this).parent().find('.plusMinus').removeClass('fa-minus').addClass('fa-plus');                
           });
           $(this).removeClass('fa-plus').addClass('fa-minus')
              $(this).parent().children('div:hidden').slideDown();
        });*/


    });


        $('nav#nav > ul').appendTo('.mobileMenu');
        $('.wrapper').width(wWidth);
        
        //console.log($('.mobileMenu > ul > li').size())
        //$('<li><a href="#" onclick="javascript:socialLogin.open();">SIGN IN</a></li><li><span onclick="pageRedirect();" style="cursor: pointer; color:#808284;">REGISTER</span></li>').insertAfter($('.mobileMenu > ul > li:last-child'));
        
    }
    else{
        $('.mobileMenu > ul ').appendTo('nav#nav');
        $('.wrapper').css({'margin-left': 0, width: '100%'});
        $('#nav-icon3').removeClass('open'); 
        //$('.plusMinus').remove();
        $('div.level0:visible, div.level1:visible').slideUp();
    }
}

function HomeSliderHeight(){
    var winHeight = $( window ).height();
    $('.homeSlider .item').height(winHeight);
}
    
$("a#single-image").fancybox();
    
$('.event_slider').slick({
    dots: false,
    infinite: true,
    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
}); 

$('.largestMenufecture.slider').slick({
	dots: false,
	infinite: true,
    speed: 500,
	autoplay: true,
	autoplaySpeed: 2000,
	arrows:false
});


			$.fn.isInViewport = function() {
				var viewportTop = $(window).scrollTop();
				var viewportBottom = viewportTop + $(window).height();
				
				var elementTop = $(this).offset().top;
				var elementBottom = elementTop + + $(this).outerHeight();
				
				return elementBottom > viewportTop && elementTop < viewportBottom;
			};
			
				var a = 0;
			$(window).scroll(function(){
                if($('h4 .count').size() > 0){
                
					if(a == 0 && $('h4 .count').isInViewport()) {
						$('h4 .count').each(function () {
							var countId = $(this).attr('id');
							$(this).prop('Counter',0).animate({
								Counter: $(this).text()
							}, {
								duration: 3000,
								easing: 'swing',
								step: function (now) {
								var fVal = Math.ceil(now);
									if(countId == 'tonnes') {	
										$(this).text(addCommas(fVal));
									} else {
										$(this).text(fVal);
									}
								}
							});
						});
						
						a = 1;
					} 
                }
				}); 
    
    
    
//        $(".section2 >.MakeItTable >.col >.blue").click(function(){
//    
//          $(this).parents(".MakeItTable").hide("slide", { direction: "left" }, 1000);
//               $(this).parents(".MakeItTable").siblings('.section1').css({'display':'block'});
//          
//        
//    });
//   






jQuery('.investor-select-wrap.investor-select-wrap-2021 h3').click(function(){
    jQuery(this).toggleClass("highlightslide");
    jQuery(this).next('.accordian_Innercontent').slideToggle();
})

    
});//ready end

  
 
/*    $('.melangColorBoxlink a').click(function(){
         $(this).text( $(this).text() == 'Show Filters +' ? "Hide Filters -" : "Show Filters +"); 
      $('.melangColorBox').slideToggle();  
    });*/

$(window).scroll(function () {
	'use strict';
	
	//var winHeight = $( window ).height();
	//var winWidht = $( window ).width();
	
	/*fixedhead();
	function fixedhead(){
		var winscrol = $(window).scrollTop();
		if(winscrol > 1){
			$('.logo-img a.logo').css({'transform':'scale(0.7)', 'top':'10px'});
		}else{
			$('.logo-img a.logo').css({'transform':'scale(1)', 'top':'36px'});
		}
	}*/
    
    
     
    
    
});


function addCommas(nStr)
{
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}