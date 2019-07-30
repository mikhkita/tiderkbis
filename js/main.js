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
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        cssEase: 'ease', 
        speed: 500,
        arrows: true,
        fade: true,
        // variableWidth: true,
        prevArrow: '<div class="b-block"><div class="arrow-left-icon"></div></div>',
        nextArrow: '<div class="b-block"><div class="arrow-right-icon"></div></div>',
        touchThreshold: 100,
        responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: false,
                dots: true,
              }
            },
          ]
    });

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
        $('.b-advice-list').slick({
            slidesToShow: 1,
            dots: false,
            arrows: false,
            slidesToScroll: 1,
            touchThreshold: 100,
            variableWidth: true
        })
    }
    function changeSliderImg(slide){
        if(window.innerWidth > 768) {
            slide.css('background-image', 'url(' + slide.attr('data-img-url') + ')');
        } else {
            slide.css('background-image', 'url(' + slide.attr('data-mobile-img-url') + ')');
        }
    }

    $('.b-slider-item').each(function(){
        changeSliderImg($(this));
    })

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

        input.val(new Intl.NumberFormat('ru-RU').format(val));

        $this.slider({
            range: 'min',
            min: 0,
            max: to,
            value: val,
            step: step,
            slide: function( event, ui ) {
                input.val(new Intl.NumberFormat('ru-RU').format(ui.value));
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

        $(this).val(new Intl.NumberFormat('ru-RU').format(Number(val)));

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
        $('html').removeClass('vacancy-open');
        $('html').removeClass('burger-open');
        return false;
    });

    $('.b-city-btn').on('click', function(){
        $('html').addClass('city-open');
    });

    $('.vacancy-form-open').on('click', function(){
        $('html').addClass('vacancy-open');
    });

    $('.b-menu-btn').on('click', function(){
        $('html').addClass('burger-open');
    });

    $(document).on('click', '.city-open .b-dark-background', function(){
        $('html').removeClass('city-open');
    });

    $(document).on('click', '.vacancy-open .b-dark-background', function(){
        $('html').removeClass('vacancy-open');
    });

    $(document).on('click', '.burger-open .b-dark-background', function(){
        $('html').removeClass('burger-open');
    });

    $('.b-filter-reset').on('click',function(){
        $(this).parents('form').find('input, select').each(function(){

            if ($(this).hasClass('select')) {
                $(this).val('').trigger("chosen:updated");
                return;
            }

            if ($(this).parent().hasClass('b-input not-empty')) {
                $(this).parent().removeClass('not-empty');
            }

            $(this).val('');
        });

        if ($(this).parents('form').attr('id') == 'vacancy-form') {
            $(this).parents('form').submit();
        }
        
    });

    $('#vacancy-form').on('change', function(){
        $(this).submit();
    });

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
                $time3 = 700;
        } else{
            var $time1 = 200,
                $time2 = 600,
                $time3 = 1000;
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
            var $time1 = 600,
                $time2 = 700;
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
                    console.log(err);

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
                changeSliderImg($(this));
            })
        }

        if(window.innerWidth < 768) {

            if(! $('.b-main-illustrations .b-illustration-list').hasClass('slick-initialized')){
                illustrationSlider();
            }

            if(! $('.b-news-list').hasClass('slick-initialized')){
                newsSlider();
            }

            if(! $('.b-advice-list').hasClass('slick-initialized')){
                adviceSlider();
            }

        }else{

            if($('.b-main-illustrations .b-illustration-list').hasClass('slick-initialized')){
                $('.b-main-illustrations .b-illustration-list').slick('unslick');
            }

            if($('.b-news-list').hasClass('slick-initialized')){
                $('.b-news-list').slick('unslick');
            }

            if($('.b-advice-list').hasClass('slick-initialized')){
                $('.b-advice-list').slick('unslick');
            }

        }
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