(function($){
  //slider
  let statusSearch = 0;
  let timeSearch = null;
  let delaySearch = 5000;
  let slidePage = function(){
      $('#slidePage').owlCarousel({
        loop:true,
        margin:20,
        responsiveClass:true,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive:{
          0:{
            items:1,
            nav:true,
            dots: false
          },
          640:{
            items:1,
            nav:true,
            dots: false
          },
          960:{
          items:4,
          nav:false,
          loop:true,
          dots: true
        }
      }
    });
  };

  /* WOW ANIMATION FUNCTIONS
   /*----------------------------------------------------*/
  new WOW().init();
  let styleWow = function(){
    try{
      new WOW().init();
    }catch (e){}
  };
  //Accordion
   $(function() {

      let accordionEle = $("#accordion .accordion");
      accordionEle.hide();
      $("#accordion a").click(function() {
          accordionEle.slideUp(500);
          accordionEle.addClass('open');
        $(this).next().slideDown(300);
      });
    });
  //endAccordion
  let slideRelateds = function(){
    $('#slideRelated').owlCarousel({
        loop:true,
        margin:20,
        responsiveClass:true,
        responsive:{
        0:{
            items:1,
            nav:true,
            dots: false
        },
        640:{
            items:4,
            nav:true,
            dots: false
        },
        1000:{
            items:4,
            nav:true,
            loop:true,
            dots: false
          }
        }
      });
    };
  //end
  //listQuestion
  $('#listQuestions > li:has(.contentQuestion)').addClass("hasSub");
  $('#listQuestions > li > a').click(function() {
    let checkElement = $(this).next();
    
    $('#listQuestions li').removeClass('active');
    $(this).closest('li').addClass('active'); 
    
    
    if((checkElement.is('.contentQuestion')) && (checkElement.is(':visible'))) {
      $(this).closest('li').removeClass('active');
      checkElement.slideUp('normal');
    }
    
    if((checkElement.is('.contentQuestion')) && (!checkElement.is(':visible'))) {
      $('#listQuestions .contentQuestion:visible').slideUp('normal');
      checkElement.slideDown('normal');
    }
    
    if (checkElement.is('.contentQuestion')) {
      return false;
    } else {
      return true;  
    }   
  });
  //end
  //HotnewTab
  $('ul.tabs li').click(function(){
    let tab_id = $(this).attr('data-tab');
    $('ul.tabs li').removeClass('active');
    $('.tabContent').removeClass('active');
    $(this).addClass('active');
    $("#"+tab_id).addClass('active');
  })
  //end
  //ProductTab
  $('.proTabs li').click(function(){
    let tab_id = $(this).attr('data-tab');
    $('.proTabs li').removeClass('active');
    $('.tabProduct').removeClass('active');
    $(this).addClass('active');
    $("#"+tab_id).addClass('active');
  })
  //end
  let checkSearch = function(){
    if(statusSearch === 0){
        window.clearTimeout(timeSearch);
        timeSearch = window.setTimeout(function(){
            $("#box-find").stop().animate({width: 210});
        },0);
    }else{
        window.clearTimeout(timeSearch);
        timeSearch = window.setTimeout(function(){
            $("#box-find").stop().animate({width: 40});
        },delaySearch);
    }
};

let changeSearch = function(){
    $("#box-find").hover(function(){
        checkSearch();
        statusSearch = 1;
    },function(){
        checkSearch();
        statusSearch = 0;
    });
};
  //mobile
  /*mobile*/
  let nav_global = $('#globalNav');
  let showMenuMobile = function () {
    $('#btnMenu').click(function(e){
      let w_device = $(window).width();
      if(e.handled !== false){
        if(w_device < 959 && $('#btnMenu').is(':visible')){
          if(nav_global.is(':visible')){
            nav_global.slideUp(500);
          }else{
            nav_global.delay(100).slideDown(500);
          }
        }
        $(this).toggleClass('show');
        e.handled = true;
      }
      e.preventDefault();
    });
  };
  //end
  let slideHomepage = function(){
        $('#slideHomepage').owlCarousel({
            loop:true,
            margin:0,
            responsiveClass:true,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive:{
                0:{
                    items:1,
                    nav:true,
                    dots: false
                },
                640:{
                    items:1,
                    nav:true,
                    dots: false
                },
                1000:{
                    items:1,
                    nav:true,
                    loop:true,
                    dots: false
                }
            }
        });
    };
    //end
    let slideIndex = function(){
      $('#slideIndex').owlCarousel({
        loop:true,
        margin:0,
        responsiveClass:true,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive:{
          0:{
            items:1,
            nav:true,
            dots: false
          },
          640:{
            items:1,
            nav:true,
            dots: false
          },
          1000:{
            items:1,
            nav:true,
            loop:true,
            dots: false
          }
        }
      });
    };
  /*equalHeight*/
   equalHeight($('.boxMedia .item'));
    function equalHeight(obj) {
      if($(window).width() > 480 && obj.length>0){
          obj.matchHeight();
          $.fn.matchHeight._update();
      } else {
        obj.removeAttr('style');
      }
    }
  //end
  jQuery(document).ready(function() {
    changeSearch();
    slidePage();
    slideRelateds();
    showMenuMobile();
    slideHomepage();
    slideIndex();
  });
  let config = {
    after: '0s',
    enter: 'top',
    move: '60px',
    over: '0.66s',
    easing: 'ease-in-out',
    viewportFactor: 0.33,
    reset: true,
    init: true
  };
  window.scrollReveal = new scrollReveal( config );
})(jQuery);
