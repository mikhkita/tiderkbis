$(document).ready(function(){	
    var isDesktop = false,
        isTablet = false,
        isMobile = false;

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

        if( myWidth > 1024 ){
            isDesktop = true;
            isTablet = false;
            isMobile = false;
        }else if( myWidth > 767 ){
            isDesktop = false;
            isTablet = true;
            isMobile = false;
        }else{
            isDesktop = false;
            isTablet = false;
            isMobile = true;
        }

        if(isMobile){
            if($(".b-vacancy-detail-form-desktop input").length){
                $(".b-vacancy-detail-form-mobile").append($(".b-vacancy-detail-form-desktop .b-input"));
            }
            if($(".b-reception-cont textarea").attr("rows") > 1){
                $(".b-reception-cont textarea").attr({"rows": 1});
            }
            if($(".b-loan-app-cont-string > .b-error-text").length){
                $(".b-error-text-mobile").append($(".b-loan-app-cont-string .b-error-text"));
            }
            if($(".b-calc-results").length){
                $(".b-calc-results.max-4-items").removeClass("max-4-items");
                $(".b-calc-results .b-btn-container").remove();
                $(".b-calc-result-list").addClass("slider-results");

                slickResults();
                var slick = $('.b-calc-result-list').slick('getSlick'),
                    id = slick.$slider.parents('.b-calc-results').attr('id');
                changeSlickCounter(id, slick.currentSlide, slick.slideCount);
            }
        }else{
            if($(".b-vacancy-detail-form-mobile input").length){
                $(".b-vacancy-detail-form-desktop").append($(".b-vacancy-detail-form-mobile .b-input"));
            }
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

    var prevArrow = '<div class="b-block">';
            prevArrow+= '<div class="arrow-left-icon"></div>'
        prevArrow+= '</div>';

    var nextArrow = '<div class="b-block">';
            nextArrow+= '<div class="arrow-right-icon">';
                nextArrow+= '<div class="clip1">'
                    nextArrow+= '<div class="slice1"></div>'
                nextArrow+= '</div>';
                nextArrow+= '<div class="clip2">'
                    nextArrow+= '<div class="slice2"></div>'
                nextArrow+= '</div>';
            nextArrow+= '</div>';
        nextArrow+= '</div>';

    $('.b-main-slider').on('init', function(slick){
        $('.b-main-slider .arrow-right-icon').addClass('first-rotate');
        setTimeout(function(){
            $('.b-main-slider .arrow-right-icon').addClass('second-rotate');
        },2500);
    });

    $(".b-main-slider").slick({
        dots: false,
        autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        cssEase: 'ease', 
        speed: 500,
        arrows: true,
        fade: true,
        pauseOnHover: false,
        pauseOnFocus: false,
        prevArrow: prevArrow,
        nextArrow: nextArrow,
        touchThreshold: 100,
        responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: false,
                dots: true,
              }
            },
        ],
    });

    $('.b-main-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        $('.b-main-slider').find('[data-slick-index="'+nextSlide+'"]').addClass('slick-anim');
        setTimeout(function(){
            $('.b-main-slider').find('[data-slick-index="'+currentSlide+'"]').removeClass('slick-anim');
        },500);

        $('.b-main-slider .arrow-right-icon').addClass('reset');
        $('.b-main-slider .arrow-right-icon').removeClass('first-rotate second-rotate');

    });

    $('.b-main-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
        $('.b-main-slider .arrow-right-icon').removeClass('reset');
        $('.b-main-slider .arrow-right-icon').addClass('first-rotate');
        setTimeout(function(){
            $('.b-main-slider .arrow-right-icon').addClass('second-rotate');
        },2500);

    });

    docButton();

    $(document).on('click', '.show-more-docs', function(){
        if($(this).parents('.b-documents').hasClass('max-4-docs')){
            $(this).parents('.b-documents').removeClass('max-4-docs');
            $(this).addClass('b-white-btn').text('Свернуть');
        } else {
            $(this).parents('.b-documents').addClass('max-4-docs');
            $(this).removeClass('b-white-btn').text('Показать все');
        }
        return false;
    });

    function docButton(){
        $('.b-documents.cut-on-mobile').each(function(){
            if ($(this).find('.b-document').length > 4 && isMobile){
                if (!$(this).hasClass('mobile-docs')) {
                    $(this).addClass('mobile-docs max-4-docs');
                    var btn = '<div class="b-btn-container b-document"><a href="#" class="b-btn show-more-docs">Показать все</a></div>';
                    var html = $(this).html() + btn;
                    $(this).html(html);
                }
            } else {
                if ($(this).hasClass('mobile-docs')) {
                    $(this).removeClass('mobile-docs max-4-docs');
                    $(this).find('.b-btn-container').remove();
                }
            }
        });
    }

    $('.b-slider-item img').css('animation-play-state', 'running');

    function illustrationSlider(){
        $('.b-main-illustrations .b-illustration-list').slick({
            slidesToShow: 1,
            dots: true,
            arrows: false,
            slidesToScroll: 1,
            touchThreshold: 100,
        })
    }

    function newsSlider(){
        $('.b-news-list').slick({
            slidesToShow: 1,
            dots: false,
            arrows: false,
            slidesToScroll: 1,
            touchThreshold: 100,
            variableWidth: true
        })
    }

    function adviceSlider(){
        $('.b-advice-list:not(.no-slider)').slick({
            slidesToShow: 1,
            dots: false,
            arrows: false,
            slidesToScroll: 1,
            touchThreshold: 100,
            variableWidth: true
        })
    }
    function changeSliderImg(img){
        if(window.innerWidth > 768) {
            img.css('background-image', 'url(' + img.attr('data-img-url') + ')');
        } else {
            img.css('background-image', 'url(' + img.attr('data-mobile-img-url') + ')');
        }
    }

    // $('.b-slider-item').each(function(){
    //     var img = $(this).find('picture');
    //     changeSliderImg(img);
    // })

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

        $this.parents('.b-rating-block').addClass("hide");
        $this.parents('.b-rating-block').siblings('.b-rating-thanks-block').removeClass("hide");
    });

    $(".b-slider-range").each(function() {

        var $this = $(this),
            to = Number($(this).attr("data-range-to").replace(/\s/g, '')),
            from = $(this).attr("data-range-from") ? Number($(this).attr("data-range-from").replace(/\s/g, '')) : 0 ,
            input = $this.parent().find('input'),
            val = Number(input.val().replace(/\s/g, '')),
            step = 1;

        if ($this.attr('data-input-id') == 'sum') {
            step = 1000;
            input.val(new Intl.NumberFormat('ru-RU').format(val));
        }

        if ($this.attr('data-input-id') == 'date') {

            if ($this.attr('data-slider-type') == 'loan') {
                var sliderValue = [6, 12, 13, 24, 36, 60];
                input.val(new Intl.NumberFormat('ru-RU').format(sliderValue[val]));
            }

            if ($this.attr('data-slider-type') == 'savings') {
                var sliderValue = ['Не установлен', 6, 12, 24];
                input.val(sliderValue[val]);
            }
        }

        $this.slider({
            range: 'min',
            min: from,
            max: to,
            value: val,
            step: step,
            slide: function( event, ui ) {
                if ($this.attr('data-input-id') == 'date') {
                    input.val(sliderValue[ui.value]);
                } else {
                    input.val(new Intl.NumberFormat('ru-RU').format(ui.value));
                }
            }
        });
    });

    $('.b-calc-slider input').on('input',function(){
        // console.log('ok');
    })

    $(".b-calc-slider").on( "slide", function(event, ui){
        if(ui.value == 0 && $(this).find('.b-slider-range').attr('data-slider-type') == 'savings'){
            $(this).addClass('b-range-text');
        } else {
            $(this).removeClass('b-range-text');
        }
    });

    $('.b-calc-slider input').on('input',function(){
        if ($(this).parents('.b-calc-slider').hasClass('b-range-text') && $(this).val() != 'Не установлен') {
            $(this).parents('.b-calc-slider').removeClass('b-range-text');
        }
    });

    $('.b-calc-slider input').on('change',function(){
        var val = $(this).val(),
            max = Number($(this).parents('.b-calc-slider').find('.b-slider-range').attr('data-range-to').replace(/\s/g, ''));
       
            if (val == '') {
                val = 0;
            }

            if (val > max) {
                val = max;   
            }

        $(this).parents('.b-calc-slider').find('.b-slider-range').slider( "value", val );

        if ($(this).parents('.b-calc-slider').find('.b-slider-range').attr('data-input-id') == 'date') {
            if ($(this).parents('.b-calc-slider').find('.b-slider-range').attr('data-slider-type') == 'loan') {
                var sliderValue = [6, 12, 13, 24, 36, 60];
                val = sliderValue[val];
            }
            if ($(this).parents('.b-calc-slider').find('.b-slider-range').attr('data-slider-type') == 'savings') {
                
                if ($(this).val() == 0) {
                    $(this).parents('.b-calc-slider').addClass('b-range-text');
                } else {
                    $(this).parents('.b-calc-slider').removeClass('b-range-text');
                }

                var sliderValue = ['Не установлен', 6, 12, 24];
                val = sliderValue[val];
            }

            $(this).val(val);
        } else {
            $(this).val(new Intl.NumberFormat('ru-RU').format(Number(val)));
        }

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

    $(".select").each(function(){
        $(this).chosen({
            width: "100%",
            disable_search_threshold: 10000
        });

        if ($(this).siblings('.chosen-container').find('span')) {
            var text = $(this).siblings('.chosen-container').find('.chosen-single span').text();
            if(text.indexOf('*') != (-1) ){
                // console.log(text.indexOf('*'));
                //
            }
        }
    })

    $('.datepicker-here').each(function(){
        var data = $(this).data('datepicker');
    });

    $('.datepicker-here').on('change', function(){
        var data = $(this).data('datepicker');

        var arDate = explode('.',$(this).val());

        if (arDate[0].length != 0) {
            if (arDate.length == 1) {
                if (arDate[0].length = 0) {
                    arDate[0] = '01';
                }

                if (arDate[0] == "0") {
                    arDate[0] = "01";
                }

                var date = new Date('1900','0',arDate[0]);
            }

            if (arDate.length == 2) {
                if (arDate[1].length != 0) {
                    if (arDate[1] == '0') {
                        arDate[1] = '01';    
                    }
                    arDate[1] = arDate[1] - 1;
                } else {
                    arDate[1] = '01';
                }
                var date = new Date('1900', arDate[1], arDate[0]);
            }

            if (arDate.length == 3) {
                arDate[1] = arDate[1] - 1;

                if (arDate[2].length == 3) {
                    arDate[2] = arDate[2]+'0';
                }

                var date = new Date(arDate[2], arDate[1], arDate[0]);
            }
        } else {
            var date = new Date('1900','0','01');
        }

        $(this).valid();
        data.selectDate(date);
    });

    $('#app-sum').on('input', function(){

        var val = $(this).val();
        if (val != '') {
            val = new Intl.NumberFormat('ru-RU').format(Number(val));
            $(this).val(val);
        }

    });

    $('input[name=name], input[name=surname], input[name=patronymic]').on('input', function(){
        val = $(this).val().replace(/[^А-Яа-яЁё]/gi,'').replace(/\s+/gi,', ');
        val = val.charAt(0).toUpperCase() + val.substr(1);
        $(this).val(val);
    })

    $('input[name=series]').on('input', function(){
        
        if ($(this).val().length > 4) {
            var val = $(this).val();
            $(this).val(val.substr(0,4));
        } else {
            $(this).val($(this).val().replace(/\D/g, ''));
        }
        
    })

    $('input[name=number]').each(function(){
        if (typeof IMask == 'function') {
            var patternMask = new IMask($(this)[0], {
                mask: '000000',
                prepare: function(value, masked){
                    if (value.length > 6) {
                        var val = value;
                        val = val.substr(0,6);
                        return val;
                    } else {
                        return value.replace(/\D/g, '');
                    }
                }
            });
        }
    });

    $(".b-input input:not([type='submit']), .b-input select").each(function(){
        $(this).parents(".b-input").removeClass("focus");
        if( 
            ($(this).val() != "" && $(this).val() != "+7 (   )    -  -  "  ) || 
            ($(this).parents(".search-string") && $(this).val() != '')
        ){
            $(this).parents(".b-input").addClass("not-empty");
        }else{
            $(this).parents(".b-input").removeClass("not-empty");
        }
    });

    if( isIE() ){
        $("body").on('mousedown click', ".b-input input, .b-input textarea", function(e) {
            $(this).parents(".b-input").addClass("focus");
        });
    }

    $("body").on("focusin", ".b-input input, .b-input textarea", function(){
        $(this).parents(".b-input").addClass("focus");
    });

    $("body").on("change", ".b-input select", function(){
        if( $(this).val() != ""){
            $(this).parents(".b-input").addClass("not-empty");
        }else{
            $(this).parents(".b-input").removeClass("not-empty");
        }
    });

    $("body").on("focusout", ".b-input input, .b-input textarea", function(){
        $(this).parents(".b-input").removeClass("focus");
        if( $(this).val() != "" && $(this).val() != "+7 (   )    -  -  " ){
            $(this).parents(".b-input").addClass("not-empty");
        }else{
            $(this).parents(".b-input").removeClass("not-empty");
        }
    });

    function isIE() {
        var rv = -1;
        if (navigator.appName == 'Microsoft Internet Explorer')
        {
            var ua = navigator.userAgent;
            var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
            if (re.exec(ua) != null)
                rv = parseFloat( RegExp.$1 );
        }
        else if (navigator.appName == 'Netscape')
        {
            var ua = navigator.userAgent;
            var re  = new RegExp("Trident/.*rv:([0-9]{1,}[\.0-9]{0,})");
            if (re.exec(ua) != null)
                rv = parseFloat( RegExp.$1 );
        }
        return rv == -1 ? false: true;
    }

    $('.b-calc-tab-item').on('click',function(){
        if (!$(this).parents('.b-calc-tab-list').hasClass('not-tabs')) {
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
        }
    });

    $('.b-personal-tab').on('click',function(){
        if (!$(this).hasClass('active')) {
            var id = $(this).attr('href');

            $('.b-tab-content').addClass('hide');
            $(id).removeClass('hide');

            $('.b-personal-tab').removeClass('active');
            $(this).addClass('active');
        }
        return false;
    });

    $('.b-calc-results.invisible').addClass('hide');
    $('.invisible').removeClass('invisible');

    if( $(".sticky").length && !isMobile){
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

    animateBtn('.b-btn:not(.b-white-btn)');

    function animateBtn(className){
        var links = $(className);
        for(var i = 0; i < links.length; i++){
            links[i].addEventListener('click', function (event) {
                // event.preventDefault();

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

                setTimeout(function(){
                    $('.ripple').remove();
                },500)

            });
        }
    }

    $('.b-advice').mousemove(function(e){
        var y = e.offsetY;
        var x = e.offsetX;
        // console.log(x);
        // console.log(y);
        $(this).find('.moveable').css({
            'top': y,
            'left': x,
        }); 
    });

    if( $(".datepicker-here").length ){
        $(".datepicker-here").each(function(){
            if (typeof IMask == 'function') {
                var patternMask = new IMask($(this)[0], {
                    mask: 'DD.MM.YYYY',
                    groups: {
                        DD: new IMask.MaskedPattern.Group.Range([1, 31]),
                        MM: new IMask.MaskedPattern.Group.Range([1, 12]),
                        YYYY: new IMask.MaskedPattern.Group.Range([1900, 2019]),
                    },
                    prepare: function(value, masked){
                        var numbers = masked._value.replace(/[^0-9]+/g,"");
                        if( value > 3 && masked._value.length == 0 || value > 1 && numbers.length == 2 || value > 3 && masked._value.length == 13 || value > 1 && numbers.length == 10){
                            var val = "0"+value+".";
                            return "0"+value+".";
                        }
                        if( masked._value.length == 1 || masked._value.length == 4 || masked._value.length == 14 || masked._value.length == 17 ){
                            var val = value+".";
                            return val; 
                        }
                        if (masked._value.length >= 10) {
                            return value;
                        }
                        return value;
                    }
                });
            }
        });
    }

    if( $("input[name=phone]").length ){
        $("input[name=phone]").each(function(){
            if (typeof IMask == 'function') {
                var phoneMask = new IMask($(this)[0], {
                    mask: '+{7} (000) 000-00-00',
                    prepare: function(value, masked){
                        if( value == 8 && masked._value.length == 0 ){
                            return "+7 (";
                        }

                        if( value == 8 && masked._value == "+7 (" ){
                            return "";
                        }

                        tmp = value.match(/[\d\+]*/g);
                        if( tmp && tmp.length ){
                            value = tmp.join("");
                        }else{
                            value = "";
                        }
                        return value;
                    }
                });
            } else {
                $(this).mask("+7 (999) 999-99-99");
            }
        });
    }

    // $('.b-close').on('click',function(){
    //     $('html').removeClass('city-open');
    //     $('html').removeClass('vacancy-open');
    //     $('html').removeClass('burger-open');
    //     $('html').removeClass('politics-open');
    //     $('html').removeClass('politics-with-btns-open');
    //     return false;
    // });

    $('.b-city-btn').on('click', function(){
        $('html').addClass('city-open');
    });

    $('.vacancy-form-open').on('click', function(){
        $('html').addClass('vacancy-open');
        return false;
    });

    $('.b-menu-btn').on('click', function(){
        $('html').addClass('burger-open');
    });

    $('.politics').on('click', function(){
        $('html').addClass('politics-open');
        return false;
    });

    $('.politics-with-btns').on('click', function(){
        $('html').addClass('politics-with-btns-open');
        return false;
    });

    $(document).on('click', '.city-open .b-dark-background, .b-city-select-block .b-close', function(){
        $('html').removeClass('city-open');
        return false;
    });

    $(document).on('click', '.vacancy-open .b-dark-background, .b-detail-vacancy-form-cont .b-close', function(){
        $('html').removeClass('vacancy-open');
        return false;
    });

    $(document).on('click', '.burger-open .b-dark-background, .b-burger-menu-block .b-close', function(){
        $('html').removeClass('burger-open');
        return false;
    });

    $(document).on('click', '.politics-open .b-dark-background, .b-politics-block .b-close', function(){
        $('html').removeClass('politics-open');
        return false;
    });

    $(document).on('click', '.politics-with-btns-open .b-dark-background, .b-politics-block-with-btns .b-close', function(){
        $('html').removeClass('politics-with-btns-open');
        return false;
    });

    $(document).on('click', '.error-open .b-dark-background, .b-drop-error-block .b-close', function(){
        $('html').removeClass('error-open');
        return false;
    });

    $('#agree-btn').on('click', function(){
        $('#politics-agreement').val('Y');
        $('#politics-agreement').parents('form').submit();
    });

    $('.b-filter-reset').on('click',function(){
        $(this).parents('form').find('input, select').each(function(){

            if ($(this).attr('type') == 'text' && !$(this).hasClass('b-range-input')) {
                $(this).val('');
                $(this).parent().removeClass('not-empty');
            }

            if ($(this).hasClass('b-range-input')) {
                var val = Number($(this).attr('default-value').replace(/\D/g, ''));
                $(this).parents('.b-calc-slider').find('.b-slider-range').slider( "value", val );
                $(this).val(val).trigger('change');
            }

            if ($(this).hasClass('select')) {
                $(this).val($(this).find("option:first").val()).trigger("chosen:updated");
                return;
            }

            if ($('.b-tumbler-text-right').hasClass('active')) {
                $('.b-tumbler-text-left').click();
            }
            if ($(this).attr('type') == 'radio' || $(this).attr('type') == 'checkbox') {
                $(this).prop('checked', false)
            }
        });

        if ($('.default-items').length) {

            $('.b-calc-inner-results .b-calc-result-list').html($('.default-items').html());

            if ($('.b-calc-inner-results .b-calc-result-list').hasClass('slick-initialized')) {
                $('.b-calc-inner-results .b-calc-result-list').slick('unslick');
                $('.b-calc-inner-results .b-calc-result-list').html($('.default-items').html());
                slickResults();
                var slick = $('.b-calc-inner-results .b-calc-result-list').slick('getSlick'),
                    id = slick.$slider.parents('.b-calc-results').attr('id');
                changeSlickCounter(id, slick.currentSlide, slick.slideCount);
            }
        }

        return false;
    });

    if(!isMobile){
        $('#vacancy-form').on('change', function(){
            $(this).submit();
        });
    }else{
        $('.mobile-search').on('click', function(){
            $('#vacancy-form').submit();
            return false;
        });
    }

    $("#vacancy-form").on('submit', function(){
        var $form = $(this);
        $form.parents('.b-vacancy-content').find('.b-left-vacancies').addClass('preloader');
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data:  $form.serialize(),
            success: function(msg){
                if( isValidJSON(msg) && msg != "1" && msg != "0"){
                    var json = JSON.parse(msg);
                    if( json.RESULT == "success" ){

                        $form.parents('.b-vacancy-content').find('.b-left-vacancies').removeClass('preloader');
                        var loanTemplate = Handlebars.compile($('#vacancy-template').html());
                        var html = '';

                        for (var i = 0; i < json.ITEMS.length; i++) {
                            
                            var $this = json.ITEMS[i];
                            var context = { 
                                name: $this.NAME,
                                city: $this.CITY,
                                position: $this.POSITION,
                                experience: $this.EXPERIENCE,
                                detailUrl: $this.DETAIL_URL,
                            };

                            html += loanTemplate(context);
                        }

                        $('.b-left-vacancies').html(html);

                    }else{
                        $form.find(".b-popup-error").html(json.error);
                    }
                }else{
                    if( msg == "1" ){
                        $link = $this.find(".b-thanks-link");
                    }else{
                        $link = $(".b-error-link");
                    }

                    $.fancybox.close();
                    $link.click();
                }
            },
            error: function(){
                $.fancybox.close();
                $(".b-error-link").click();
            },
            complete: function(){
                if ($form.hasClass('b-calc-form')) {
                    $('.b-calc-results').removeClass('preloader');
                }
            }
        });

        return false;

    });

    setTimeout(function(){
        $('.b-cookies-block').addClass('loaded');
    },500);

    $(document).on('click', '.close-cookie', function(){
        $(this).parents('.loaded').removeClass('loaded');
        return false;
    });

    autosize(document.querySelectorAll('textarea'));

    $('#loan-application-form, .b-vacancy-detail-form').find('input, select, textarea').on('change', function(){
        if($(this).valid() == 1){
            $(this).addClass('valid');
        } else {
            $(this).removeClass('valid');
        }
    });

    $('.b-search-btn span').on('click', function(){
        if (window.innerWidth < 768) {
            var $time1 = 100,
                $time2 = 300,
                $time3 = 400;
        } else{
            var $time1 = 100,
                $time2 = 300,
                $time3 = 400;
        }
            $('.b-header').addClass('only-icon');
        setTimeout(function(){
            $('.b-header').addClass('show-input');
        },$time1);
        setTimeout(function(){
            $('.b-header').addClass('show-full-input');
        },$time2);
        setTimeout(function(){
            $('.b-search-input input').focus();
        },$time3);
    })

    $('.search-close').on('click', function(){
        if (window.innerWidth < 768) {
            var $time1 = 300,
                $time2 = 350;
        } else{
            var $time1 = 200,
                $time2 = 300;
        }
            $('.b-header').removeClass('show-full-input');
        setTimeout(function(){
            $('.b-header').removeClass('show-input');
        },$time1);
        setTimeout(function(){
            $('.b-header').removeClass('only-icon');
        },$time2);
    })

    $("#contacts-select").on('change', function(){
        var val = $(this).find('option:selected').val();
        $('.b-contacts-accordeon .b-accordeon-list').addClass('hide');
        $('#'+val).removeClass('hide');
    });

    $('.b-only-one-accordeon .b-accordeon-head').on('click',function(){
        $(this).parents('.b-accordeon').siblings().each(function(){
            if ($(this).hasClass('opened')) {
                $(this).find('.b-accordeon-head').click();
            }
        })
    }); 

    $('.b-reception-cont .b-tumbler-item input').on('change', function(){
        $('.b-online-changed-inputs').each(function(){
            if ($(this).hasClass('hide')) {
                $(this).removeClass('hide');
            } else {
                $(this).addClass('hide');
            }
        });
    });

    $('.b-change-form-link').on('click', function(){
        var id = $(this).attr('href');
        $('.b-personal-form-block').addClass('hide');
        $(id).removeClass('hide');
        return false;
    });

    if ($('#pluploadCont').length){
        var uploader = new plupload.Uploader({
            runtimes : 'html5',
            browse_button : 'pickfiles', // you can pass an id...
            container: document.getElementById('pluploadCont'), // ... or DOM Element itself
            url : 'addFile.php ',
            // url : $('.b-vacancy-detail-form').attr("data-file-action"),
            multi_selection: false,
            drop_element : 'pluploadCont',
            
            filters : {
                max_file_size : '20mb',
                mime_types: [
                    {title : "Documents", extensions : "doc,docx,pdf,rtf,xls,xlsx"},
                ]
            },

            init: {
                Init: function(up, info) {
                    console.log('[Init]', 'Info:', info, 'Features:', up.features);
                },
                PostInit: function() {
                    
                },
                FilesAdded: function(up, files) {
                    plupload.each(files, function(file) {
                        if (up.files.length > 1) {
                            up.removeFile(up.files[0]);
                        }
                        // document.getElementById('filelist').innerHTML = '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
                        // document.getElementById("pickfiles").innerHTML = "Резюме выбрано";
                        $("#original_filename").val(file.name);
                        document.getElementById("pickfiles").className = "attach successful";
                    });
                    up.start();
                    
                },
                UploadProgress: function(up, file) {
                    // document.getElementById("pickfiles").innerHTML = "Загрузка&nbsp;" + file.percent + "%";
                },
                FileUploaded: function(up, file, res) {
                    // document.getElementById("pickfiles").innerHTML = "Файл прикреплен";
                    document.getElementById("pickfiles").className = "attach successful";
                    var json = JSON.parse(res.response);

                    $("#random_filename").val(json.filePath); 
                    $('.b-resume').removeClass('hide');
                    $('.b-resume-name').text(file.name);
                    $('.b-dragndrop-block').addClass('success');
                },
                Error: function(up, err) {

                    $('.b-dragndrop-block').addClass('error');

                    if (err.code == -600) {
                        document.getElementById("plupload-error").innerHTML = "Файл слишком большой";
                        document.getElementById("pickfiles").className = "attach error";
                    };
                    if (err.code == -601) {
                        document.getElementById("plupload-error").innerHTML = "Неверный формат файла";
                        document.getElementById("pickfiles").className = "attach error";
                    };

                    setTimeout(function(){
                        $('.b-dragndrop-block').removeClass('error');
                    }, 2000);

                }
            }
        });
        uploader.init();
    }

    $(document).on('click', '.b-resume .icon-cross', function(){
        $(this).parents('.b-resume').addClass('hide');
        $('#original_filename').val('');
        $('#random_filename').val('');
        $('.b-dragndrop-block').removeClass('success');
    })

    function explode( delimiter, string ) {

        var emptyArray = { 0: '' };

        if ( arguments.length != 2
            || typeof arguments[0] == 'undefined'
            || typeof arguments[1] == 'undefined' )
        {
            return null;
        }

        if ( delimiter === ''
            || delimiter === false
            || delimiter === null )
        {
            return false;
        }

        if ( typeof delimiter == 'function'
            || typeof delimiter == 'object'
            || typeof string == 'function'
            || typeof string == 'object' )
        {
            return emptyArray;
        }

        if ( delimiter === true ) {
            delimiter = '1';
        }

        return string.toString().split ( delimiter.toString() );
    }

    function isValidJSON(src) {
        var filtered = src;
        filtered = filtered.replace(/\\["\\\/bfnrtu]/g, '@');
        filtered = filtered.replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, ']');
        filtered = filtered.replace(/(?:^|:|,)(?:\s*\[)+/g, '');

        return (/^[\],:{}\s]*$/.test(filtered));
    }

    function illustrationSlider(){
        $('.b-main-illustrations .b-illustration-list').slick({
            slidesToShow: 1,
            dots: true,
            arrows: false,
            slidesToScroll: 1,
            touchThreshold: 100,
        })
    }

    if(window.innerWidth < 768) {
        illustrationSlider();
        newsSlider();
        adviceSlider();
    }

    $(window).resize(function(){

        if ($('.b-main-slider').length) {
            $('.b-slider-item').each(function(){
                var img = $(this).find('.b-slider-item-img');
                changeSliderImg(img);
            })
        }

        docButton();

        if(window.innerWidth < 768) {

            if(! $('.b-main-illustrations .b-illustration-list').hasClass('slick-initialized')){
                illustrationSlider();
            }

            if(! $('.b-news-list').hasClass('slick-initialized')){
                newsSlider();
            }

            if(! $('.b-advice-list:not(.no-slider)').hasClass('slick-initialized')){
                adviceSlider();
            }

        }else{

            if($('.b-main-illustrations .b-illustration-list').hasClass('slick-initialized')){
                $('.b-main-illustrations .b-illustration-list').slick('unslick');
            }

            if($('.b-news-list').hasClass('slick-initialized')){
                $('.b-news-list').slick('unslick');
            }

            if($('.b-advice-list:not(.no-slider)').hasClass('slick-initialized')){
                $('.b-advice-list').slick('unslick');
            }

        }
    });

    $("[data-begin]").hover(function(){
        document.getElementById($(this).attr("data-begin")).unpauseAnimations();
    },function(){
        document.getElementById($(this).attr("data-begin")).pauseAnimations();
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