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

	var slickCounter = '<div class="b-slick-count"><span class="current-slick">1</span> / <span class="count-slick"></span></div>';

    $('.slider-results').each(function(){
    	if (!$(this).hasClass('slick-initialized')) {
    		$(this).slick({
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
    })
}

function changeSlickCounter(id, currentSlide, slideCount){

	if (slideCount != 1 && slideCount%2 != 0) {
		slideCount ++;
	};

	$('#'+id+' .current-slick').text((currentSlide + 2)/2);
    $('#'+id+' .count-slick').text((slideCount)/2);

}

var customHandlers = [];

$(document).ready(function(){	
	var rePhone = /^\+\d \(\d{3}\) \d{3}-\d{2}-\d{2}$/,
		tePhone = '+7 (999) 999-99-99';

	$.validator.setDefaults({ ignore: ":hidden:not(.select)" });

	$.validator.addMethod('customPhone', function (value) {
		return rePhone.test(value);
	});

	// slickResults();

	$('.b-calc-result-list').on('afterChange', function(event, slick, currentSlide, nextSlide){
		var id = slick.$slider.parents('.b-calc-results').attr('id');
	    changeSlickCounter(id, slick.currentSlide, slick.slideCount);
	});

	if ($('.b-slick-count').length) {
		$('.b-slick-count').each(function(){
			console.log('this');
			var slick = $(this).parents('.b-calc-result-list').slick('getSlick'),
				id = slick.$slider.parents('.b-calc-results').attr('id');
	    	changeSlickCounter(id, slick.currentSlide, slick.slideCount);
		});
	}

	$(".ajax, .not-ajax").parents("form").each(function(){
		$(this).validate({
			rules: {
				email: 'email',
				phone: 'customPhone',
				number: {
					minlength: 6,
				},
				series: {
					minlength: 4,	
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

		if( $(this).find("input[name=phone]").length ){
			$(this).find("input[name=phone]").each(function(){
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

		if ($(this).find('#original_filename')) {
			$(this).find('#original_filename').each(function(){
				if($(this).val() == ''){
					$(this).parents('b-dragndrop-block').addClass('ajax-error');
				} else {
					$(this).parents('b-dragndrop-block').removeClass('ajax-error');
				}
			})
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

  		if( $(this).find("input.error, select.error, textarea.error").length == 0 ){
  			var $this = $(this),
  				$thanks = $($this.attr("data-block"));

			if ($form.find('.b-error-text') && !$form.find('.b-error-text').hasClass('hide')) {
  				$form.find('.b-error-text').addClass('hide');
  			}

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

				var resID = $form.attr('data-results-id'),
					res = $('#'+resID),
					flag = false,
					off = 50,
					duration = 800;

				$('.b-calc-results').each(function(){
					if ($(this).hasClass('hide')) {
						flag = true;
					}
				});

				if (flag) {
					$('.b-calc-results').addClass('hide');
					$('#'+resID).removeClass('hide');
				}

				$('#'+resID).removeClass('hide');

				res.addClass('preloader');
				if (res.hasClass('max-4-items')) {
					res.removeClass('max-4-items');
					res.find('.b-btn-container').addClass('hide');
				}

				console.log($form.attr('data-results-id'));

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

								var id = $form.attr('data-template'),
									resID = $form.attr('data-results-id');

								var source = $('#'+id).html();
							    var loanTemplate = Handlebars.compile(source);
							    var html = '';

							    $('#'+resID+' .b-calc-result-list').html(html);
							    var list = $('#'+resID).find('.b-calc-result-list');

							    if (list.hasClass('slider-results')) {
							    	if (list.hasClass('slick-initialized')) {
							    		list.slick('unslick');
							    	}
							    	list.addClass('isSlider');
							    	list.removeClass('slider-results');
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

							    $('#'+resID+' .b-calc-result-list').html(html);
							    console.log($('#'+resID));
							    if ($('#'+resID).hasClass('not-ajax-results')) {
							    	$('#'+resID).removeClass('not-ajax-results');
							    }

							  	if ($('#'+resID+' .b-calc-result-list').hasClass('isSlider') && json.ITEMS.length > 2) {
							  		$('#'+resID+' .b-calc-result-list').addClass('slider-results');
							    	slickResults();
 	
							    	var slick = $('#'+resID+' .b-calc-result-list').slick('getSlick'),
							    		id = slick.$slider.parents('.b-calc-results').attr('id');
	    							changeSlickCounter(id, slick.currentSlide, slick.slideCount);
							    }
							}

							if( json.ACTION == "reload" ){
	                            window.location.reload();
	                        }

				        }else{
				        	$form.find(".b-popup-error").html(json.ERROR);
				        }

					}else{
						if( msg == "1" ){
							$link = $this.find(".b-thanks-link");
						}else{
							$link = $(".b-error-link");
						}

						// if( $this.attr("data-afterAjax") && customHandlers[$this.attr("data-afterAjax")] ){
						// 	customHandlers[$this.attr("data-afterAjax")]($this);
						// }

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
  		}else{
  			$(this).find("input.error, select.error, textarea.error").eq(0).focus();
  			if ($form.find('.b-error-text') && $form.find('.b-error-text').hasClass('hide')) {
  				$form.find('.b-error-text').removeClass('hide');
  			}
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