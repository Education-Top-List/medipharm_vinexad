
jQuery(document).ready(function(){

				// SCROLL TO DIV
				jQuery(window).scroll(function(){
					if(jQuery(this).scrollTop()>500){
						jQuery('.scrolltop').addClass('go_scrolltop');
					}
					else{
						jQuery('.scrolltop').removeClass('go_scrolltop');
					}
				});
				jQuery('.scrolltop').click(function (){
					jQuery('html, body').animate({
						scrollTop: jQuery("html").offset().top
					}, 1000);
				}); 
			// SLIDE
			jQuery('.focal_week ul').slick({
				dots: true,
				infinite: true,
				speed: 300,
				slidesToShow: 4,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 2000,
					// fade: true,
					cssEase: 'linear',
					responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1,
							infinite: false,
							dots: false
						}
					},
					{
						breakpoint: 600,
						settings: {
							slidesToShow: 1,
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
		// STICKY NAVBAR
		var sticky = document.querySelector('.sticky');

		if (sticky.style.position !== 'sticky') {
			var stickyTop = sticky.offsetTop;

			document.addEventListener('scroll', function () {
				window.scrollY >= stickyTop ?
				sticky.classList.add('fixed_menu') :
				sticky.classList.remove('fixed_menu');
			});
		}

		// MENU MOBILE
		jQuery(".icon_mobile_click").click(function(){
			jQuery(this).fadeOut(300);
			jQuery("#page_wrapper").addClass('page_wrapper_active');
			jQuery("#menu_mobile_full").addClass('menu_show').stop().animate({left: "0px"},260);
			jQuery(".close_menu, .bg_opacity").show();
		});
		jQuery(".close_menu").click(function(){
			jQuery(".icon_mobile_click").fadeIn(300);
			jQuery("#menu_mobile_full").animate({left: "-260px"},260).removeClass('menu_show');
			jQuery("#page_wrapper").removeClass('page_wrapper_active');
			jQuery(this).hide();
			jQuery('.bg_opacity').hide();
		});
		jQuery('.bg_opacity').click(function(){
			jQuery("#menu_mobile_full").animate({left: "-260px"},260).removeClass('menu_show');
			jQuery("#page_wrapper").removeClass('page_wrapper_active');
			jQuery('.close_menu').hide();
			jQuery(this).hide();
			jQuery('.icon_mobile_click').fadeIn(300);
		});
		jQuery("#menu_mobile_full ul li a").click(function(){
			jQuery(".icon_mobile_click").fadeIn(300);
			jQuery("#page_wrapper").removeClass('page_wrapper_active');
		});

		jQuery('.mobile-menu ul.menu').children().has('ul.sub-menu').click(function(){
			jQuery(this).children('ul').slideToggle();
			jQuery(this).siblings().has('ul.sub-menu').find('ul.sub-menu').slideUp();
		}).children('ul').children().click(function(event){event.stopPropagation()});
		jQuery('.mobile-menu ul.menu').children().find('ul.sub-menu').children().has('ul.sub-menu').click(function(){
			jQuery(this).find('ul.sub-menu').slideToggle();
		});
		jQuery('.mobile-menu ul.menu li').has('ul.sub-menu').click(function(event){
			jQuery(this).toggleClass('editBefore_mobile');
		});
		jQuery('.mobile-menu ul.menu').children().has('ul.sub-menu').addClass('menu-item-has-children');
		jQuery('.mobile-menu ul.menu li').click(function(){
			$(this).addClass('active').siblings().removeClass('active, editBefore_mobile');
		});

		// list_products_categories
		jQuery('.list_products_categories>ul').children().has('ul.sub_product_category').click(function(){
			jQuery(this).children('ul').slideToggle();
			jQuery('.list_products_categories>ul').children().not(this).has('ul.sub_product_category').find('ul.sub_product_category').slideUp();
		}).children('ul').children().click(function(event){event.stopPropagation()});
		jQuery('.list_products_categories>ul').children().find('ul.sub_product_category').children().has('ul.sub-menu').click(function(){
			jQuery(this).find('ul.sub-menu').slideToggle();
		});
		jQuery('.list_products_categories ul li').has('ul.sub_product_category').click(function(event){
			jQuery(this).toggleClass('editBefore_li_product');
			//event.preventDefault();
		});
		jQuery('.list_products_categories ul').children().has('ul.sub_product_category').addClass('menu-item-has-children');
		jQuery('.list_products_categories ul li').click(function(){
			jQuery(this).addClass('active').siblings().removeClass('active, editBefore_li_product ');
		});

        // PAGE TEMPLATE TRACNGHIEM
		jQuery('.button_start').click(function(){
			jQuery('.area_start_button, .page-template-page-template-tracnghiem .content_left h3.widget-title').slideUp();
			jQuery('.page-template-page-template-tracnghiem .content_left .wpcf7').delay(300).slideDown();
		});
		jQuery('.show_result').click(function(){
			jQuery(this).fadeOut(100);
			jQuery('.page-template-page-template-tracnghiem .content_left .form_ketquatracnghiem').slideDown(300);
		});

			// SHOP POPUP
			jQuery(" .fixed_show_popup .wrap_showp>p:last-child").click(function(e){
				jQuery('.popup_order').stop(true,true).fadeIn('300').find('.close_popup').click(function(){jQuery('.popup_order').stop(true,true).fadeOut('300');
			});
				jQuery('.popup_order').find('.content_popup').show();
				e.preventDefault();
			});
			jQuery(" .fixed_show_popup .wrap_showp>p:nth-child(1)").click(function(e){
				jQuery('.popup_question').stop(true,true).fadeIn('300').find('.close_popup').click(function(){jQuery('.popup_question').stop(true,true).fadeOut('300');
			});
				jQuery('.popup_question').find('.content_popup').show();
				e.preventDefault();
			});	


		jQuery(document).click(function(event) {
 		 //if you click on anything except the modal itself or the "open modal" link, close the modal
  		if (!jQuery(event.target).closest(".content_popup, .fixed_show_popup .wrap_showp>p:last-child , .fixed_show_popup .wrap_showp>p:nth-child(1)").length) {
  			jQuery("body").find(".content_popup").hide();
  				jQuery(".popup").fadeOut(300);
  			}
		});
		var width = jQuery(window).width();
		if(width>1200){

			jQuery('.three_categories .row>.col-sm-4:nth-child(1)').attr({"data-wow-delay" : "0.25s", "data-wow-duration" : "1s"}).addClass("wow animated fadeInUp ");
			jQuery('.three_categories .row>.col-sm-4:nth-child(2)').attr({"data-wow-delay" : "0.4s", "data-wow-duration" : "1s"}).addClass("wow animated fadeInUp ");
			jQuery('.three_categories .row>.col-sm-4:nth-child(3)').attr({"data-wow-delay" : "0.55s", "data-wow-duration" : "1s"}).addClass("wow animated fadeInUp ");
			jQuery('.focal_week ').attr({"data-wow-delay" : "1s", "data-wow-duration" : "1s"}).addClass("wow animated fadeInUp ");
			jQuery(' .home .list_post_content .list_post_item , .home .footer .container').attr({"data-wow-delay" : "0.3s", "data-wow-duration" : "1s"}).addClass("wow animated fadeInUp ");
			jQuery('.home .fixed_show_popup').attr({"data-wow-delay" : "6.5s", "data-wow-duration" : "1s"}).addClass("wow animated fadeInUp ");
			jQuery('#pg-16-0').attr({"data-wow-delay" : "0.3s", "data-wow-duration" : "1s"}).addClass("wow animated zoomIn  ");
			
		
			new WOW().init();
		}
			  jQuery('.form_hoidaptracnghiem .wpcf7-radio .wpcf7-list-item span').click(function(e){
               jQuery(this).find('input').prop('checked' , function(index,attr){
                   return attr == true ? null : 'checked';
               });    
           }) ;

	});

