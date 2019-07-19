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

        data.selectDate(date);
    });

    $('#app-sum').on('input', function(){

        var val = $(this).val();
        console.log(val);
        val = Number(val).toLocaleString();
        $(this).val(val);

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
    $('input[name=number]').on('input', function(){

        if ($(this).val().length > 6) {
            var val = $(this).val();
            $(this).val(val.substr(0,6));
        } else {
            $(this).val($(this).val().replace(/\D/g, ''));
        }

    })

    $(".b-input input, .b-input select").each(function(){
        $(this).parents(".b-input").removeClass("focus");
        if( $(this).val() != "" && $(this).val() != "+7 (   )    -  -  " ){
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

    $('.b-close').on('click',function(){
        $('html').removeClass('city-open');
    });

    $('.b-city-btn').on('click', function(){
        $('html').addClass('city-open');
    });

    $(document).on('click', '.city-open .b-dark-background', function(){
        $('html').removeClass('city-open');
    });

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