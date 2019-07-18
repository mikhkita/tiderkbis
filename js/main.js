$(document).ready(function(){	
    function resize(){
       if( typeof( window.innerWidth ) == 'number' ) {
            myWidth = window.innerWidth;
            myHeight = window.innerHeight;
        } else if( document.documentElement && ( document.documentElement.clientWidth || 
        document.documentElement.clientHeight ) ) {
            myWidth = document.documentElement.clientWidth;
            myHeight = document.documentElement.clientHeight;
        } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
            myWidth = document.body.clientWidth;
            myHeight = document.body.clientHeight;
        }
    }
    $(window).resize(resize);
    resize();

    $.fn.placeholder = function() {
        if(typeof document.createElement("input").placeholder == 'undefined') {
            $('[placeholder]').focus(function() {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                    input.removeClass('placeholder');
                }
            }).blur(function() {
                var input = $(this);
                if (input.val() == '' || input.val() == input.attr('placeholder')) {
                    input.addClass('placeholder');
                    input.val(input.attr('placeholder'));
                }
            }).blur().parents('form').submit(function() {
                $(this).find('[placeholder]').each(function() {
                    var input = $(this);
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                    }
                });
            });
        }
    }
    $.fn.placeholder();

    $(".b-main-slider").slick({
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        cssEase: 'ease', 
        speed: 500,
        arrows: true,
        prevArrow: '<div class="b-block"><div class="arrow-left-icon"></div></div>',
        nextArrow: '<div class="b-block"><div class="arrow-right-icon"></div></div>',
        touchThreshold: 100
    });

    $('.b-btn-more').on('click', function(){
        $(this).parents('.max-4-items').removeClass('max-4-items');
        if ($(this).parent().hasClass('b-btn-container')) {
            $(this).parent().addClass('hide');
        } else {
            $(this).addClass('hide');
        }
        return false;
    })

    $(".b-star").hover(function() {
        $(this).addClass("highlight");
        $(this).prevAll(".b-star").addClass("highlight");
        $(".b-stars").addClass("hover");
    }, function() {
        $(this).removeClass("highlight");
        $(this).prevAll(".b-star").removeClass("highlight");
        $(".b-stars").removeClass("hover");
    });

    $(".b-star").click(function() {
        var $this = $(this);

        //здесь будет ajax-запрос
        $this.parent().find(".b-star").removeClass("highlight").removeClass("selected");
        $(".b-stars").removeClass("hover");

        $this.addClass("selected");
        $this.prevAll(".b-star").addClass("selected");
    });

    $(".b-slider-range").each(function() {

        var $this = $(this),
            to = Number($(this).attr("data-range-to").replace(/\s/g, '')),
            input = $this.parent().find('input'),
            val = Number(input.val().replace(/\s/g, '')),
            step = 1;

        if ($this.attr('data-input-id') == 'sum') {
            step = 100;
        }   

        input.val(val.toLocaleString());

        $this.slider({
            range: 'min',
            min: 0,
            max: to,
            value: val,
            step: step,
            slide: function( event, ui ) {
                input.val(ui.value.toLocaleString());
            }
        });
    });

    $('.b-calc-slider input').on('input',function(){

        var val = $(this).val(),
            max = Number($(this).parents('.b-calc-slider').find('.b-slider-range').attr('data-range-to').replace(/\s/g, ''));

        if (val == '') {
            val = 0;
        }

        if (val > max) {
            val = max;   
        }

        console.log(val);

        $(this).val(Number(val).toLocaleString());

        $(this).parents('.b-calc-slider').find('.b-slider-range').slider( "value", val );

    })

    $('.b-tumbler-text').on('click', function(){
        if (!$(this).hasClass('active')) {
            var tumbler = $(this).siblings('.b-tumbler-item').find('input');
            if (tumbler.prop('checked') === true) {
                tumbler.prop('checked', false);
            } else {
                tumbler.prop('checked', true);
            }
            $(tumbler).change();
        }
    });

    $('.tumbler').on('change', function(){
        $(this).parents('.b-tumbler-item').siblings('.b-tumbler-text').each(function(){
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
            } else {
                $(this).addClass('active');
            }
        })
    });

    $(".select").chosen({
        width: "264px",
        disable_search_threshold: 10000
    });

    $('.b-calc-tab-item').on('click',function(){
        if (!$(this).hasClass('active')) {
            var id = $(this).attr('href');

            $('.b-calc-form-block').addClass('hide');
            $(id).removeClass('hide');

            $('.b-calc-results').addClass('hide');
            if (!$(id+'-results').hasClass('not-ajax-results')) {
                $(id+'-results').removeClass('hide');
            }

            $('.b-calc-tab-item').removeClass('active');
            $(this).addClass('active');
        }
        return false;
    });

    $('.b-calc-results.invisible').addClass('hide');
    $('.invisible').removeClass('invisible');

    if( $(".sticky").length ){
        Stickyfill.add($('.sticky'));
    }

    $(".b-accordeon").each(function(){
        if( $(this).hasClass("opened") ){
            $(this).find(".b-accordeon-body").animate({
                height : "show",
                padding : "show"
            }, 300);
        }
    });

    $("body").on( "click", ".b-accordeon-head", function(){
        var $accordeon = $(this).parents(".b-accordeon");
        if( $accordeon.hasClass("opened") ){
            $accordeon.find(".b-accordeon-body").animate({
                height : "hide",
                padding : "hide"
            }, 300);
            $accordeon.removeClass("opened");
        }else{
            $accordeon.find(".b-accordeon-body").animate({
                height : "show",
                padding : "show"
            }, 300);
            $accordeon.addClass("opened");
        }
    });

    $('.preloader').each(function(){
        $(this).removeClass('preloader');
    })

    animateBtn();

    function animateBtn(){
        var links = $(".b-btn:not(.b-white-btn)");
        for(var i = 0; i < links.length; i++){
            links[i].addEventListener('click', function (event) {
                event.preventDefault();

                // Remove any old one
                var ripple = document.querySelector('.ripple');
                if (ripple) {
                    ripple.remove();
                }

                // Setup
                var buttonWidth = this.offsetWidth,
                    buttonHeight = this.offsetHeight;

                // Make it round!
                if(buttonWidth >= buttonHeight) {
                    buttonHeight = buttonWidth;
                } else {
                    buttonWidth = buttonHeight;
                }

                // Get the center of the element
                var x = event.offsetX==undefined?event.layerX:event.offsetX - buttonWidth / 2,
                    y = event.offsetY==undefined?event.layerY:event.offsetY - buttonHeight / 2;

                // Add the element
                var span = document.createElement('span');
                span.className = 'ripple';
                s = span.style;
                s.width = buttonWidth + 'px';
                s.height = buttonHeight + 'px';
                s.top = y + 'px';
                s.left = x + 'px';
                this.appendChild(span);
            });
        }
    }

    $('.b-close').on('click',function(){
        $('html').removeClass('city-open');
    });

    $('.b-city-btn').on('click', function(){
        $('html').addClass('city-open');
    });

    $(document).on('click', '.city-open .b-dark-background', function(){
        $('html').removeClass('city-open');
    });

    // // Первая анимация элементов в слайде
    // $(".b-step-slide[data-slick-index='0'] .slider-anim").addClass("show");

    // // Кастомные переключатели (тумблеры)
    // $(".b-step-slider").on('beforeChange', function(event, slick, currentSlide, nextSlide){
    //     $(".b-step-tabs li.active").removeClass("active");
    //     $(".b-step-tabs li").eq(nextSlide).addClass("active");
    // });

    // // Анимация элементов в слайде
    // $(".b-step-slider").on('afterChange', function(event, slick, currentSlide, nextSlide){
    //     $(".b-step-slide .slider-anim").removeClass("show");
    //     $(".b-step-slide[data-slick-index='"+currentSlide+"'] .slider-anim").addClass("show");
    // });

});