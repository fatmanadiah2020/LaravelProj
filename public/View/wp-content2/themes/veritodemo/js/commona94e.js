/**************************************************************************
* Common js

**************************************************************************/
jQuery(document).ready(function() {
	"use strict";
	 /* Navigation */
	jQuery("#nav > li").hover(function() {
		var el = jQuery(this).find(".level0-wrapper");
		el.hide();
		el.css("left", "0");
		el.stop(true, true).delay(150).fadeIn(300, "easeOutCubic");
	}, function() {
		jQuery(this).find(".level0-wrapper").stop(true, true).delay(300).fadeOut(300, "easeInCubic");
	});
	var scrolled = false;
	jQuery("#nav li.level0.drop-menu").mouseover(function() {
		if (jQuery(window).width() >= 740) {
			jQuery(this).children('ul.level1').fadeIn(100);
		}
		return false;
	}).mouseleave(function() {
		if (jQuery(window).width() >= 740) {
			jQuery(this).children('ul.level1').fadeOut(100);
		}
		return false;
	});
	jQuery("#nav li.level0.drop-menu li").mouseover(function() {
		if (jQuery(window).width() >= 740) {
			jQuery(this).children('ul').css({
				top: 0,
				left: "165px"
			});
			var offset = jQuery(this).offset();
			if (offset && (jQuery(window).width() < offset.left + 325)) {
				jQuery(this).children('ul').removeClass("right-sub");
				jQuery(this).children('ul').addClass("left-sub");
				jQuery(this).children('ul').css({
					top: 0,
					left: "-167px"
				});
			} else {
				jQuery(this).children('ul').removeClass("left-sub");
				jQuery(this).children('ul').addClass("right-sub");
			}
			jQuery(this).children('ul').fadeIn(100);
		}
	}).mouseleave(function() {
		if (jQuery(window).width() >= 740) {
			jQuery(this).children('ul').fadeOut(100);
		}
	});
	/* Bestsell slider */
	jQuery("#bestsell-slider .slider-items").owlCarousel({
		items: 4, //10 items above 1000px browser width
		itemsDesktop: [1024, 4], //4 items between 1024px and 901px
		itemsDesktopSmall: [900, 3], // 4 items betweem 900px and 601px
		itemsTablet: [600, 2], //3 items between 600 and 0;
		itemsMobile: [380, 1],
		navigation: true,
		navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
		slideSpeed: 500,
		pagination: false
	});
	/* Featured slider */
	jQuery("#featured-slider .slider-items").owlCarousel({
		items: 4, //10 items above 1000px browser width
		itemsDesktop: [1024, 4], //5 items between 1024px and 901px
		itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
		itemsTablet: [600, 2], //2 items between 600 and 0;
		itemsMobile: [380, 1],
		navigation: true,
		navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
		slideSpeed: 500,
		pagination: false
	});
	/* New arrivals slider */
	jQuery("#new-arrivals-slider .slider-items").owlCarousel({
		items: 4, //10 items above 1000px browser width
		itemsDesktop: [1024, 3], //5 items between 1024px and 901px
		itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
		itemsTablet: [600, 2], //2 items between 600 and 0;
		itemsMobile: [380, 1],
		navigation: true,
		navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
		slideSpeed: 500,
		pagination: false
	});
	/* Brand logo slider */
	jQuery("#brand-logo-slider .slider-items").owlCarousel({
		autoPlay: true,
		items: 6, //10 items above 1000px browser width
		itemsDesktop: [1024, 4], //5 items between 1024px and 901px
		itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
		itemsTablet: [600, 2], //2 items between 600 and 0;
		itemsMobile: [380, 1],
		navigation: true,
		navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
		slideSpeed: 500,
		pagination: false
	});
	/* Category desc slider */
	jQuery("#category-desc-slider .slider-items").owlCarousel({
		autoPlay: true,
		items: 1, //10 items above 1000px browser width
		itemsDesktop: [1024, 1], //5 items between 1024px and 901px
		itemsDesktopSmall: [900, 1], // 3 items betweem 900px and 601px
		itemsTablet: [600, 1], //2 items between 600 and 0;
		itemsMobile: [320, 1],
		navigation: true,
		navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
		slideSpeed: 500,
		pagination: false
	});
	/* Related products slider */
	jQuery("#related-products-slider .slider-items").owlCarousel({
		items: 4, //10 items above 1000px browser width
		itemsDesktop: [1024, 4], //5 items between 1024px and 901px
		itemsDesktopSmall: [768, 3], // 3 items betweem 900px and 601px
		itemsTablet: [640, 2], //2 items between 600 and 0;
		itemsMobile: [380, 1],
		navigation: true,
		navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
		slideSpeed: 500,
		pagination: false
	});
	/* Upsell products slider */
	jQuery("#upsell-products-slider .slider-items").owlCarousel({
		items: 4, //10 items above 1000px browser width
		itemsDesktop: [1024, 4], //5 items between 1024px and 901px
		itemsDesktopSmall: [768, 3], // 3 items betweem 900px and 601px
		itemsTablet: [640, 2], //2 items between 600 and 0;
		itemsMobile: [380, 1],
		navigation: true,
		navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
		slideSpeed: 500,
		pagination: false
	});
	
	/* Bestsell slider */
	jQuery("#special .slider-items").owlCarousel({
        items: 2, //10 items above 1000px browser width
		itemsDesktop: [1024, 2], //4 items between 1024px and 901px
		itemsDesktopSmall: [900, 3], // 4 items betweem 900px and 601px
		itemsTablet: [600, 2], //3 items between 600 and 0;
		itemsMobile: [380, 1],
		navigation: true,
		navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
		slideSpeed: 500,
		pagination: false
	});
	
	
	/* Mobile menu */
	jQuery("#mobile-menu").mobileMenu({
		MenuWidth: 250,
		SlideSpeed: 300,
		WindowsMaxWidth: 767,
		PagePush: true,
		FromLeft: true,
		Overlay: true,
		CollapseMenu: true,
		ClassName: "mobile-menu"
	});
	/* side nav categories */
	if (jQuery('.subDropdown')[0]) {
		jQuery('.subDropdown').on("click", function() {
			jQuery(this).toggleClass('plus');
			jQuery(this).toggleClass('minus');
			jQuery(this).parent().find('ul').slideToggle();
		});
	}
	jQuery.extend(jQuery.easing, {
		easeInCubic: function(x, t, b, c, d) {
			return c * (t /= d) * t * t + b;
		},
		easeOutCubic: function(x, t, b, c, d) {
			return c * ((t = t / d - 1) * t * t + 1) + b;
		},
	});
	(function(jQuery) {
		jQuery.fn.extend({
			accordion: function() {
				return this.each(function() {
					function activate(el, effect) {
						jQuery(el).siblings(panelSelector)[(effect || activationEffect)](((effect == "show") ? activationEffectSpeed : false), function() {
							jQuery(el).parents().show();
						});
					}
				});
			}
		});
	})(jQuery);
	jQuery(function(jQuery) {
		jQuery('.accordion').accordion();
		jQuery('.accordion').each(function(index) {
			var activeItems = jQuery(this).find('li.active');
			activeItems.each(function(i) {
				jQuery(this).children('ul').css('display', 'block');
				if (i == activeItems.length - 1) {
					jQuery(this).addClass("current");
				}
			});
		});
	});
	/* Top Cart js */
	function slideEffectAjax() {
		jQuery('.top-cart-contain').mouseenter(function() {
			jQuery(this).find(".top-cart-content").stop(true, true).slideDown();
		});
		jQuery('.top-cart-contain').mouseleave(function() {
			jQuery(this).find(".top-cart-content").stop(true, true).slideUp();
		});
	}
	jQuery(document).ready(function() {
		slideEffectAjax();
	});
	/*  sticky header  */
	jQuery(window).scroll(function() {
		jQuery(this).scrollTop() > 1 ? jQuery("nav").addClass("sticky-header") : jQuery("nav").removeClass("sticky-header")
		jQuery(this).scrollTop() > 1 ? jQuery(".top-cart-contain").addClass("sticky-topcart") : jQuery(".top-cart-contain").removeClass("sticky-topcart")
	});
});
/*  UItoTop */
jQuery.fn.UItoTop = function(options) {
	var defaults = {
		text: '',
		min: 200,
		inDelay: 600,
		outDelay: 400,
		containerID: 'toTop',
		containerHoverID: 'toTopHover',
		scrollSpeed: 1200,
		easingType: 'linear'
	};
	var settings = jQuery.extend(defaults, options);
	var containerIDhash = '#' + settings.containerID;
	var containerHoverIDHash = '#' + settings.containerHoverID;
	jQuery('body').append('<a href="#" id="' + settings.containerID + '">' + settings.text + '</a>');
	jQuery(containerIDhash).hide().on("click", function() {
		jQuery('html, body').animate({
			scrollTop: 0
		}, settings.scrollSpeed, settings.easingType);
		jQuery('#' + settings.containerHoverID, this).stop().animate({
			'opacity': 0
		}, settings.inDelay, settings.easingType);
		return false;
	}).prepend('<span id="' + settings.containerHoverID + '"></span>').hover(function() {
		jQuery(containerHoverIDHash, this).stop().animate({
			'opacity': 1
		}, 600, 'linear');
	}, function() {
		jQuery(containerHoverIDHash, this).stop().animate({
			'opacity': 0
		}, 700, 'linear');
	});
	jQuery(window).scroll(function() {
		var sd = jQuery(window).scrollTop();
		if (typeof document.body.style.maxHeight === "undefined") {
			jQuery(containerIDhash).css({
				'position': 'absolute',
				'top': jQuery(window).scrollTop() + jQuery(window).height() - 50
			});
		}
		if (sd > settings.min) jQuery(containerIDhash).fadeIn(settings.inDelay);
		else jQuery(containerIDhash).fadeOut(settings.Outdelay);
	});
};
/* mobileMenu */
var isTouchDevice = ('ontouchstart' in window) || (navigator.msMaxTouchPoints > 0);
jQuery(window).on("load", function() {
	if (isTouchDevice) {
		jQuery('#nav a.level-top').on("click", function(e) {
			jQueryt = jQuery(this);
			jQueryparent = jQueryt.parent();
			if (jQueryparent.hasClass('parent')) {
				if (!jQueryt.hasClass('menu-ready')) {
					jQuery('#nav a.level-top').removeClass('menu-ready');
					jQueryt.addClass('menu-ready');
					return false;
				} else {
					jQueryt.removeClass('menu-ready');
				}
			}
		});
	}
	jQuery().UItoTop();
});



  /*wishlist js*/
jQuery(document).off("click", ".link-wishlist");

jQuery(document).on("click", ".link-wishlist", function() {

    var b = yith_wcwl_plugin_ajax_web_url;
    var opts = {
        add_to_wishlist: jQuery(this).data("product-id"),
        product_type: jQuery(this).data("product-type"),
        action: "add_to_wishlist"
    };
    mgk_yith_ajax_wish_list(jQuery(this), b, opts);
    return false;
});

mgk_yith_ajax_wish_list = function(obj, ajaxurl, opts) { 
    jQuery.ajax({
        type: "POST",
        url: ajaxurl,
        data: "product_id=" + opts.add_to_wishlist + "&" + jQuery.param(opts),
        dataType: 'json',
        success: function(resp) {
            response_result = resp.result,
                response_message = resp.message;
            //alert(response_result+"----"+response_message);
            jQuery('body .page div#notification').remove();
            var ntop = jQuery('#wpadminbar') !== undefined ? jQuery('#wpadminbar').height() : 10;
            if (response_result == 'true') {
            	
                if (js_verito_wishvar.MGK_ADD_TO_WISHLIST_SUCCESS_TEXT !== undefined)
                    jQuery('<div id="notification" class="row"><div class="success">' + js_verito_wishvar.MGK_ADD_TO_WISHLIST_SUCCESS_TEXT + '<img class="close" alt="" src="' + js_verito_wishvar.IMAGEURL + '/close.png"></div></div>').prependTo('body .page');
                jQuery('body .page div#notification').css('top', ntop + 'px');
                jQuery('body .page div#notification > div').fadeIn('show');
                jQuery('html,body').animate({
                    scrollTop: 0
                }, 300);
            } else if (response_result == 'exists') {
                if (js_verito_wishvar.MGK_ADD_TO_WISHLIST_EXISTS_TEXT !== undefined)
                    jQuery('<div id="notification" class="row"><div class="success">' + js_verito_wishvar.MGK_ADD_TO_WISHLIST_EXISTS_TEXT + '<img class="close" alt="" src="' + js_verito_wishvar.IMAGEURL + '/close.png"></div></div>').prependTo('body .page');
                jQuery('body .page div#notification').css('top', ntop + 'px');
                jQuery('body .page div#notification > div').fadeIn('show');
                jQuery('html,body').animate({
                    scrollTop: 0
                }, 300);

            }
            setTimeout(function() {
                removeNft();
            }, 10000);

        }
    });
};
var removeNft = function() {
    if (jQuery("#notification") !== undefined)
        jQuery("#notification").remove();
};


   /*add to compare js */    
jQuery(document).off('click', '.add-to-links a.compare');
jQuery(document).on('click', '.add-to-links a.compare', function(e) {

        e.preventDefault();
        var button = jQuery(this),
            data = {
                action: yith_woocompare.actionadd,
                id: button.data('product_id'),
                context: 'frontend'
            },
            widget_list = jQuery('.yith-woocompare-widget ul.products-list');

        // add ajax loader
        if( typeof jQuery.fn.block != 'undefined' ) {
            button.block({message: null, overlayCSS: { background: '#fff url(' + yith_woocompare.loader + ') no-repeat center', backgroundSize: '16px 16px', opacity: 0.6}});
            widget_list.block({message: null, overlayCSS: { background: '#fff url(' + yith_woocompare.loader + ') no-repeat center', backgroundSize: '16px 16px', opacity: 0.6}});
        }

        jQuery.ajax({
            type: 'post',
            url: yith_woocompare.ajaxurl.toString().replace( '%%endpoint%%', yith_woocompare.actionadd ),
            data: data,
            dataType: 'json',
            success: function(response){

                if( typeof jQuery.fn.block != 'undefined' ) {
                    button.unblock();
                    widget_list.unblock()
                }

                // button.addClass('added')
                //         .attr( 'href', response.table_url )
                //         .text( yith_woocompare.added_label );

                // add the product in the widget
                widget_list.html( response.widget_table );

                if ( yith_woocompare.auto_open == 'yes')
                    jQuery('body').trigger( 'yith_woocompare_open_popup', { response: response.table_url, button: button } );
            }
        });
    });



    jQuery(document).on('click', 'a.compare.added', function (ev) {
        ev.preventDefault();

        var table_url = this.href;

        if (typeof table_url == 'undefined')
            return;

        jQuery('body').trigger('yith_woocompare_open_popup', {response: table_url, button: jQuery(this)});
    });


/* category style js */
jQuery(function() {
  jQuery(".widget_product_categories ul > li.cat-item.cat-parent > ul").hide();
  jQuery(".widget_product_categories ul > li.cat-item.cat-parent.current-cat-parent > ul").show();
  jQuery(".widget_product_categories ul > li.cat-item.cat-parent.current-cat.cat-parent > ul").show();
  jQuery(".widget_product_categories ul > li.cat-item.cat-parent").click(function() {
    if (jQuery(this).hasClass('current-cat-parent')) {
      var li = jQuery(this).closest('li');
      li.find(' > ul').slideToggle('fast');
      jQuery(this).toggleClass("close-cat");
    } else {
      var li = jQuery(this).closest('li');
      li.find(' > ul').slideToggle('fast');
      jQuery(this).toggleClass("cat-item.cat-parent open-cat");
    }
  });
  jQuery(".widget_product_categories ul.children li.cat-item,ul.children li.cat-item > a").click(function(e) {
    e.stopPropagation();
  });
});

    //countdown js filter
jQuery('.timer-grid').each(function(){
    var countTime=jQuery(this).attr('data-time');jQuery(this).countdown(countTime,function(event){jQuery(this).html('<div class="day box-time-date"><span class="number">'+event.strftime('%D')+' </span>days</div> <div class="hour box-time-date"><span class="number">'+event.strftime('%H')+'</span>Hrs</div><div class="min box-time-date"><span class="number">'+event.strftime('%M')+'</span> MINS</div> <div class="sec box-time-date"><span class="number">'+event.strftime('%S')+' </span>SEC</div>');});
});



 /* variation image change js */

	 jQuery(document).ready(function() {
	
   jQuery(".product-shop .variations_form .variations select").click(function () {        
    var varimg= jQuery(".product-full a").attr('href');      	
    
     jQuery(".zoomWindowContainer div").css("background-image","url("+varimg+")");  
   
   });
    });


// default Version revslider js

jQuery(document).ready(function() {
    jQuery('#rev_slider_4').show().revolution({
        dottedOverlay: 'none',
        delay: 5000,
        startwidth: 1920,
        startheight: 540,
        hideThumbs: 200,
        thumbWidth: 200,
        thumbHeight: 50,
        thumbAmount: 2,
        navigationType: 'thumb',
        navigationArrows: 'solo',
        navigationStyle: 'round',
        touchenabled: 'on',
        onHoverStop: 'on',
        swipe_velocity: 0.7,
        swipe_min_touches: 1,
        swipe_max_touches: 1,
        drag_block_vertical: false,
        spinner: 'spinner0',
        keyboardNavigation: 'off',
        navigationHAlign: 'center',
        navigationVAlign: 'bottom',
        navigationHOffset: 0,
        navigationVOffset: 20,
        soloArrowLeftHalign: 'left',
        soloArrowLeftValign: 'center',
        soloArrowLeftHOffset: 20,
        soloArrowLeftVOffset: 0,
        soloArrowRightHalign: 'right',
        soloArrowRightValign: 'center',
        soloArrowRightHOffset: 20,
        soloArrowRightVOffset: 0,
        shadow: 0,
        fullWidth: 'on',
        fullScreen: 'off',
        stopLoop: 'off',
        stopAfterLoops: -1,
        stopAtSlide: -1,
        shuffle: 'off',
        autoHeight: 'off',
        forceFullWidth: 'on',
        fullScreenAlignForce: 'off',
        minFullScreenHeight: 0,
        hideNavDelayOnMobile: 1500,
        hideThumbsOnMobile: 'off',
        hideBulletsOnMobile: 'off',
        hideArrowsOnMobile: 'off',
        hideThumbsUnderResolution: 0,
        hideSliderAtLimit: 0,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        startWithSlide: 0,
        fullScreenOffsetContainer: ''
    });
});

// version 2 revslider js

jQuery(document).ready(function() {
	jQuery('#rev_slider_5').show().revolution({
	dottedOverlay: 'none',
	delay: 5000,
	startwidth: 913,
	startheight: 500,
	hideThumbs: 200,
	thumbWidth: 200,
	thumbHeight: 50,
	thumbAmount: 2,
	navigationType: 'thumb',
	navigationArrows: 'solo',
	navigationStyle: 'round',
	touchenabled: 'on',
	onHoverStop: 'on',
	swipe_velocity: 0.7,
	swipe_min_touches: 1,
	swipe_max_touches: 1,
	drag_block_vertical: false,
	spinner: 'spinner0',
	keyboardNavigation: 'off',
	navigationHAlign: 'center',
	navigationVAlign: 'bottom',
	navigationHOffset: 0,
	navigationVOffset: 20,
	soloArrowLeftHalign: 'left',
	soloArrowLeftValign: 'center',
	soloArrowLeftHOffset: 20,
	soloArrowLeftVOffset: 0,
	soloArrowRightHalign: 'right',
	soloArrowRightValign: 'center',
	soloArrowRightHOffset: 20,
	soloArrowRightVOffset: 0,
	shadow: 0,
	fullWidth: 'on',
	fullScreen: 'off',
	stopLoop: 'off',
	stopAfterLoops: -1,
	stopAtSlide: -1,
	shuffle: 'off',
	autoHeight: 'off',
	forceFullWidth: 'on',
	fullScreenAlignForce: 'off',
	minFullScreenHeight: 0,
	hideNavDelayOnMobile: 1500,
	hideThumbsOnMobile: 'off',
	hideBulletsOnMobile: 'off',
	hideArrowsOnMobile: 'off',
	hideThumbsUnderResolution: 0,
	hideSliderAtLimit: 0,
	hideCaptionAtLimit: 0,
	hideAllCaptionAtLilmit: 0,
	startWithSlide: 0,
	fullScreenOffsetContainer: ''
});
});

// list grid archive page js


if(js_verito_wishvar.WOO_EXIST)
{
  jQuery(function ($) {

        "use strict";


        jQuery.display = function (view) {

            view = jQuery.trim(view);

            if (view == 'list') {
                jQuery(".button-grid").removeClass("button-active");
                jQuery(".button-list").addClass("button-active");
                jQuery.getScript(js_verito_wishvar.SITEURL+ "/wp-content/plugins/yith-woocommerce-quick-view/assets/js/frontend.js", function () {
                });
                jQuery('.pro-grid .category-products .products-grid').attr('class', 'products-list');


                jQuery('.pro-grid ul.products-list  > li.item').each(function (index, element) {

                    var htmls = '';
                    var element = jQuery(this);


                    element.attr('class', 'item');


                    htmls += '<div class="pimg">';

                    var image = element.find('.pimg').html();

                    if (image != undefined) {
                        htmls += image;
                    }

                    htmls += '</div>';

            

                    htmls += '<div class="product-shop">';
                    if (element.find('.item-title').length > 0)
                        htmls += '<h2 class="product-name item-title"> ' + element.find('.item-title').html() + '</h2>';

                     var ratings = element.find('.ratings').html();

                    htmls += '<div class="rating"><div class="ratings">' + ratings + '</div></div>';

                    var descriptions = element.find('.desc').html();
                    htmls += '<div class="desc std">' + descriptions + '</div>';

                      var price = element.find('.price-box').html();

                    if (price != null) {
                        htmls += '<div class="price-box">' + price + '</div>';
                    }

                    htmls += '<div class="actions"><div class="action">' + element.find('.action').html() + '</div>';

                    htmls += '<ul class="add-to-links">';
                     var adtolinks = element.find('.add-to-links').html();
                    if (adtolinks != undefined) {

                        htmls += adtolinks;
                    }
                     htmls += '</ul>';
                    htmls += '</div>';
                    htmls += '</div>';


                    element.html(htmls);
                });


                jQuery.cookie('display', 'list');

            } else{
                 var wooloop=1;
                 var pgrid='';
                 jQuery(".button-list").removeClass("button-active");
                 jQuery(".button-grid").addClass("button-active");
                 jQuery.getScript(js_verito_wishvar.SITEURL +"/wp-content/plugins/yith-woocommerce-quick-view/assets/js/frontend.js", function () {
                 });
                 jQuery('.pro-grid .category-products .products-list').attr('class', 'products-grid');
                 
                 jQuery('.pro-grid ul.products-grid > li.item').each(function (index, element) {
                    var html = '';

                    element = jQuery(this);

                    var item_class =js_verito_wishvar.PRODUCT_ITEM_CLASS;
                    var item_count =js_verito_wishvar.PRODUCT_ITEM_COUNT;

                    if(wooloop%item_count==1) 
                    {
                     pgrid='wide-first';   
                     }
                     else if(wooloop%item_count==0) 
                     {
                     pgrid='last'; 
                      }
                      else
                      {
                       pgrid=''; 

                      }
                         
                   
                   
                    element.attr('class', item_class + ' ' +pgrid);

                   // element.attr('class', 'item col-lg-4 col-md-4 col-sm-4 col-xs-6 ' +pgrid);

                    html += '<div class="item-inner"><div class="item-img"><div class="item-img-info"><div class="pimg">';
              

                    var image = element.find('.pimg').html();

                    if (image != undefined) {

                        html += image;
                    }
                    html +='</div><div class="box-hover"><ul class="add-to-links">';
                    var adtolinks = element.find('.add-to-links').html();

                    if (adtolinks != undefined) {

                        html += adtolinks;
                    }

                    html +='</ul></div></div></div>';
                    
                    html +='<div class="item-info"><div class="info-inner">';
                       if (element.find('.item-title').length > 0)
                       {
                        html += '<div class="item-title"> ' + element.find('.item-title').html() + '</div>';
                    }
                

                html +='<div class="item-content">';
                        var ratings = element.find('.ratings').html();

                    html += '<div class="rating"><div class="ratings">' + ratings + '</div></div>';

                        var price = element.find('.price-box').html();

                     if (price != null) {
                        html += '<div classs="item-price"><div class="price-box"> ' + price + '</div></div>';
                    }
                    
                    var descriptions = element.find('.desc').html();
                    html += '<div class="desc std">' + descriptions + '</div>';

                    html += '<div class="action">';
                     var actions = element.find('.action').html();
                   
                     html +=actions;
                   html += '</div>';

                    html += '</div></div></div></div>';

                    element.html(html);
                      wooloop++;
                 });

                 jQuery.cookie('display', 'grid');
            }
        }

        jQuery('a.list-trigger').click(function () {
            jQuery.display('list');

        });
        jQuery('a.grid-trigger').click(function () {
            jQuery.display('grid');
        });

        var view = 'grid';
        view = jQuery.cookie('display') !== undefined ? jQuery.cookie('display') : view;

        if (view) {
            jQuery.display(view);

        } else {
            jQuery.display('grid');
        }
        return false;


    });

}