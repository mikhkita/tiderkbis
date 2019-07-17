function getNextField($form){
	var j = 1;
	while( $form.find("input[name="+j+"]").length ){
		j++;
	}
	return j;
}

function fancyOpen(el){
    $.fancybox(el,{
    	padding:0,
    	fitToView: false,
        scrolling: 'no',
        beforeShow: function(){
			$(".fancybox-wrap").addClass("beforeShow");
			if( !device.mobile() ){
		    	$('html').addClass('fancybox-lock'); 
		    	$('.fancybox-overlay').html($('.fancybox-wrap')); 
		    }
		},
		afterShow: function(){
			$(".fancybox-wrap").removeClass("beforeShow");
			$(".fancybox-wrap").addClass("afterShow");
			setTimeout(function(){
                $('.fancybox-wrap').css({
                    'position':'absolute'
                });
                $('.fancybox-inner').css('height','auto');
            },200);
		},
		beforeClose: function(){
			$(".fancybox-wrap").removeClass("afterShow");
			$(".fancybox-wrap").addClass("beforeClose");
		},
		afterClose: function(){
			$(".fancybox-wrap").removeClass("beforeClose");
			$(".fancybox-wrap").addClass("afterClose");
		},
    }); 
    return false;
}

function slickResults(){

	var slickCounter = '<div class="b-slick-count"><span id="current">1</span> / <span id="count"></span></div>';

    $('.slider-results').slick({
        dots: false,
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        cssEase: 'ease', 
        speed: 400,
        arrows: true,
        adaptiveHeight: true,
        prevArrow: '<div class="b-block"><div class="arrow-left-icon"></div></div>',
        nextArrow: '<div class="b-block"><div class="arrow-right-icon"></div></div>'+slickCounter,
        touchThreshold: 100
    });
}

function changeSlickCounter(currentSlide, slideCount){

	if (slideCount != 1 && slideCount%2 != 0) {
		slideCount ++;
	};

	$('#current').text((currentSlide + 2)/2);
    $('#count').text((slideCount)/2);
    
}

var customHandlers = [];

$(document).ready(function(){	
	var rePhone = /^\+\d \(\d{3}\) \d{3}-\d{2}-\d{2}$/,
		tePhone = '+7 (999) 999-99-99';

	$.validator.addMethod('customPhone', function (value) {
		return rePhone.test(value);
	});

	slickResults();

	$('.b-calc-result-list').on('afterChange', function(event, slick, currentSlide, nextSlide){
	    changeSlickCounter(slick.currentSlide, slick.slideCount);
	});

	if ($('.b-slick-count').length) {
	    var slick = $('.b-calc-result-list').slick('getSlick');
	    changeSlickCounter(slick.currentSlide, slick.slideCount);
	}

	$(".ajax, .not-ajax").parents("form").each(function(){
		$(this).validate({
			onkeyup: (!$(this).hasClass("b-data-order-form"))?false:true,
			rules: {
				email: 'email',
				phone: 'customPhone',
				ORDER_PROP_3: 'email',
				ORDER_PROP_4: 'customPhone',
				"store-quality":{
                    required: true
                },
                "goods-quality":{
                    required: true
                },
                "manager-quality":{
                    required: true
                },
                "pack-quality":{
                    required: true
                },
                "courier-quality":{
                    required: true
                }
			},
			errorPlacement: function(error, element) {
                error.appendTo(element.parents(".b-review-input").addClass("error"));
            },
            success: function(label) {
			    label.parents(".b-review-input").removeClass("error");
			},
			errorElement : "span",
			highlight: function(element, errorClass) {
			    $(element).addClass("error").parents(".b-input").addClass("error");
			},
			unhighlight: function(element) {
			    $(element).removeClass("error").parents(".b-input").removeClass("error");
			}
		});
		if( $(this).find("input[name=phone], input[name=addressee-phone], input[name=ORDER_PROP_4], input[name=PERSONAL_PHONE]").length ){
			$(this).find("input[name=phone], input[name=addressee-phone], input[name=ORDER_PROP_4], input[name=PERSONAL_PHONE]").each(function(){
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

		if( $(this).hasClass("b-data-order-form") ){
			$(this).find("input[type='text'], input[type='tel'], input[type='email'], textarea, select").blur(function(){
			   // $(this).valid();
			});

			$(this).find("input[type='text'], input[type='tel'], input[type='email'], textarea, select").keyup(function(){
			   // $(this).valid();
			});
		}
	});

	function whenScroll(){
		var scroll = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
		if( customHandlers["onScroll"] ){
			customHandlers["onScroll"](scroll);
		}
	}
	$(window).scroll(whenScroll);
	whenScroll();

	$(".fancy:not(.fancy-binded)").each(function(){
		var $popup = $($(this).attr("href")),
			$this = $(this);
		$this.fancybox({
			padding : 0,
			content : $popup,
			helpers: {
	         	overlay: {
	            	locked: true 
	         	}
	      	},
			beforeShow: function(){
				$(".fancybox-wrap").addClass("beforeShow");
				$popup.find(".custom-field").remove();
				if( $this.attr("data-value") ){
					var name = getNextField($popup.find("form"));
					$popup.find("form").append("<input type='hidden' class='custom-field' name='"+name+"' value='"+$this.attr("data-value")+"'/><input type='hidden' class='custom-field' name='"+name+"-name' value='"+$this.attr("data-name")+"'/>");
				}
				if( $popup.attr("data-beforeShow") && customHandlers[$popup.attr("data-beforeShow")] ){
					customHandlers[$popup.attr("data-beforeShow")]($popup);
				}
			},
			afterShow: function(){
				$(".fancybox-wrap").removeClass("beforeShow");
				$(".fancybox-wrap").addClass("afterShow");
				if( $popup.attr("data-afterShow") && customHandlers[$popup.attr("data-afterShow")] ){
					customHandlers[$popup.attr("data-afterShow")]($popup);
				}
				$popup.find("input[type='text'],input[type='number'],textarea").eq(0).focus();
			},
			beforeClose: function(){
				$(".fancybox-wrap").removeClass("afterShow");
				$(".fancybox-wrap").addClass("beforeClose");
				if( $popup.attr("data-beforeClose") && customHandlers[$popup.attr("data-beforeClose")] ){
					customHandlers[$popup.attr("data-beforeClose")]($popup);
				}
			},
			afterClose: function(){
				$(".fancybox-wrap").removeClass("beforeClose");
				$(".fancybox-wrap").addClass("afterClose");
				if( $popup.attr("data-afterClose") && customHandlers[$popup.attr("data-afterClose")] ){
					customHandlers[$popup.attr("data-afterClose")]($popup);
				}
			}
		});
		$this.addClass("fancy-binded");
	});

	var open = false;
    $("body").on("mouseup", ".b-popup *, .b-popup", function(){
        open = true;
    });
    $("body").on("mousedown", ".fancybox-slide", function() {
        open = false;
    }).on("mouseup", ".fancybox-slide", function(){
        if( !open ){
            $.fancybox.close();
        }
    });

	$(".b-go").click(function(){
		var block = $( $(this).attr("data-block") ),
			off = $(this).attr("data-offset")||0,
			duration = $(this).attr("data-duration")||800;
		$("body, html").animate({
			scrollTop : block.offset().top-off
		},duration);
		return false;
	});

	$(".fancy-img").fancybox({
		padding : 0
	});

	$(".goal-click").click(function(){
		if( $(this).attr("data-goal") )
			yaCounter12345678.reachGoal($(this).attr("data-goal"));
	});

	$(".ajax, .not-ajax").parents("form").submit(function(){
		var $form = $(this);

  		if( $(this).find("input.error,select.error,textarea.error,.b-postamat-error").length == 0 ){
  			var $this = $(this),
  				$thanks = $($this.attr("data-block"));

  			if( $(this).find(".not-ajax").length ){
  				if( $("select#date").length ){
  					$("select#date").prop("disabled", false);
  				}
  				return true;
  			}

  			$this.find(".ajax").attr("onclick", "return false;");

  			if( $this.attr("data-beforeAjax") && customHandlers[$this.attr("data-beforeAjax")] ){
				customHandlers[$this.attr("data-beforeAjax")]($this);
			}

			if( $this.attr("data-goal") ){
				yaCounter12345678.reachGoal($this.attr("data-goal"));
			}

			if ($form.hasClass('b-calc-form')) {

				var res = $('.b-calc-results'),
					off = 50,
					duration = 800;

				res.addClass('preloader');

				$("body, html").animate({
					scrollTop : res.offset().top-off
				},duration);

			}

  			$.ajax({
			  	type: $(this).attr("method"),
			  	url: $(this).attr("action"),
			  	data:  $this.serialize(),
				success: function(msg){

					if( isValidJSON(msg) && msg != "1" && msg != "0"){
						var json = JSON.parse(msg);

						if( json.RESULT == "success" ){

							if ($form.attr('data-template')) {
								var id = $form.attr('data-template');

								var source = $('#'+id).html();
							    var loanTemplate = Handlebars.compile(source);
							    var html = '';

							    $('.b-calc-results .b-calc-result-list').html(html);

							    if ($('.b-calc-result-list').hasClass('slider-results')) {
							    	$('.b-calc-result-list').slick('unslick');
							    	$('.b-calc-result-list').addClass('isSlider');
							    	$('.b-calc-result-list').removeClass('slider-results');
							    }

							    for (var i = 0; i < json.ITEMS.length; i++) {
							    	var $this = json.ITEMS[i];

							    	if(isObject($this.MONTHLY_PAYMENT)){
							    		if ($this.MONTHLY_PAYMENT.MIN)
							    			$this.MONTHLY_PAYMENT.MIN = ($this.MONTHLY_PAYMENT.MIN*1).toLocaleString();
							    		if($this.MONTHLY_PAYMENT.MAX)
							    			$this.MONTHLY_PAYMENT.MAX = ($this.MONTHLY_PAYMENT.MAX*1).toLocaleString();
							    	} else {
							    		$this.MONTHLY_PAYMENT = ($this.MONTHLY_PAYMENT*1).toLocaleString();
							    	}


						    	  	var context = { 
								    	id: $this.ID,
										title: $this.TITLE,
										subtitle: $this.SUBTITLE,
										itemInfo: $this.ITEM_INFO,
										monthlyPayment: $this.MONTHLY_PAYMENT,
										overpayment: $this.OVERPAYMENT,
										percentRate: $this.PERCENT_RATE,
										detailUrl: $this.DETAIL_URL,
										advatagesList: $this.ADVATAGES_LIST,
										income: ($this.INCOME*1).toLocaleString(),
										endSum: ($this.END_SUM*1).toLocaleString()
								    };

								    html += loanTemplate(context);
							    }

							    $('.b-calc-results .b-calc-result-list').html(html);

							  	if ($('.b-calc-result-list').hasClass('isSlider') && json.ITEMS.length > 2) {
							  		$('.b-calc-result-list').addClass('slider-results');
							    	slickResults();
 	
							    	var slick = $('.b-calc-result-list').slick('getSlick');
	    							changeSlickCounter(slick.currentSlide, slick.slideCount);
							    }
							}

				        }else{
				        	$form.find(".b-popup-error").html(json.error);
				        }

					}else{
						if( msg == "1" ){
							$link = $this.find(".b-thanks-link");
						}else{
							$link = $(".b-error-link");
						}

						if( $this.attr("data-afterAjax") && customHandlers[$this.attr("data-afterAjax")] ){
							customHandlers[$this.attr("data-afterAjax")]($this);
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

					setTimeout(function(){
						if ($form.hasClass('b-calc-form')) {
							$('.b-calc-results').removeClass('preloader');
						}
					},1000);

					$this.find(".ajax").removeAttr("onclick");
					if( !$this.is("#b-form-auth") ){
						$this.find("input[type=text],textarea").val("");
					}
				}
			});
  		}else{
  			$(this).find("input.error,select.error,textarea.error").eq(0).focus();
  		}
  		return false;
  	});

	$("body").on("click", ".ajax", function(){
		$(this).parents("form").submit();
		return false;
	});

	function isValidJSON(src) {
        var filtered = src;
        filtered = filtered.replace(/\\["\\\/bfnrtu]/g, '@');
        filtered = filtered.replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, ']');
        filtered = filtered.replace(/(?:^|:|,)(?:\s*\[)+/g, '');

        return (/^[\],:{}\s]*$/.test(filtered));
    }

    function isObject(val) {
	    if (val === null) { return false;}
	    return ( (typeof val === 'function') || (typeof val === 'object') );
	}

});