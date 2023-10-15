'use strict';
var $ = jQuery;

jQuery(document).ready(function ($) {

	$('.woofusion_pricing-features__item-wrapper').on('click', function () {
		$(this).parent('.woofusion-pricing-features-items').toggleClass('active');
		// $('[data-pricing-feature-item].active').removeClass('active');
	});

	$('.woofusion-features-header').on('click', function () {
		$(this).closest('[data-pricing-feature-item]').removeClass('active');
	});

	// Custom Js
	AOS.init({ disable: 'mobile' });


	//Sticky Menue
	$(window).scroll(function () {
		var scroll = $(window).scrollTop();
		// for top scroll
		if (scroll >= 0) {
			$(".site-header").addClass("sticky");
		}
		if (scroll <= 0) {
			$(".site-header").removeClass("sticky");
		}
	});

	// Scrollup
	$.scrollUp({
		scrollName: 'scrollUp', // Element ID
		topDistance: '300', // Distance from top before showing element (px)
		topSpeed: 300, // Speed back to top (ms)
		animation: 'fade', // Fade, slide, none
		animationInSpeed: 200, // Animation in speed (ms)
		animationOutSpeed: 200, // Animation out speed (ms)
		scrollText: '<i class="fa-solid fa-arrow-up"></i>', // Text for element
		activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	});

	// for search module
	$('.woofusion-module-keyword-search').keyup(function () {
		let $keyword = $(this).val().toLowerCase();
		wofusion_search_module_by_kewords($keyword);
	});

	// Doc js

	// Doc Page Tab 
	$('.doc-accordion-litem ul a').click(function () {

		$('.doc-article-page').hide();
		$('.docs-list a.active').removeClass('active');
		$(this).addClass('active');

		var docTab = $(this).attr('href');
		$(docTab).fadeIn(200);

		return false;  // prevents link action

	});  // end click 

	$('.docs-list li:first a').click();

	// // user Account Tab

	// jQuery(".wfn-myaccount-area .tab_body").hide();
    // jQuery(".wfn-myaccount-area .tab_body[data-id='tab_dashboard']").show();

    // jQuery(".wfn-myaccount-area .tabs .tab_item").unbind("click");
    // jQuery(".wfn-myaccount-area .tabs .tab_item").bind("click", function () {

    //   jQuery(".wfn-myaccount-area .tabs .tab_item").removeClass('active');
    //   jQuery(this).addClass('active');

    //   jQuery(".wfn-myaccount-area .tab_body").hide();
    //   jQuery(".wfn-myaccount-area .tab_body[data-id='" + jQuery(this).data('target') + "']").show();
    // });


});



/**
 * search modules by kewords
 */
function wofusion_search_module_by_kewords(keyword) {
	let $modules = document.querySelectorAll(".woofusion-frontend-module-item");
	let $keyword = keyword.replace(/\s/g, '');
	if ($modules.length > 0) {
		$modules.forEach(function ($element, $item) {
			let $module_title = $($element).find('.woofusion-frontend-module-title > a > h4').text().toLowerCase().replace(/\s/g, '');
			if ($keyword.length >= 3) {
				($module_title.indexOf($keyword) >= 0) ? $($element).show() : $($element).hide();
			} else {
				$($element).show();
			}
		});
	}

}