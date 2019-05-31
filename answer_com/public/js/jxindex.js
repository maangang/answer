/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports) {

	"use strict";

	function changeLocation(obj) {
	    var value = $(obj).attr("Val");
	    var chooseName = $(obj).html();
	    var location = window.document.location.href;
	    var pathName = location.split("/");
	    cookie.set("local_city", chooseName);
	    cookie.set("local_city_pingying", value);
	    // obj.href = "http://" + pathName[2] + value;
	    obj.attr("href", "http://" + pathName[2] + value);
	}

	// 驾校商圈cookie
	$(".seo-area ul li").on("click", "a", function (ev) {
	    if (!($(this).hasClass("city-more") || $(this).hasClass("other-school"))) {
	        //changeLocation函数在common_header中
	        changeLocation($(ev.target));
	    }
	});
	$(document).ready(function () {
	    var sub1_href = $(".subject1").attr("href");
	    var sub4_href = $(".subject4").attr("href");

	    if ($($(".swiper-wrapper img")[0]).attr("data-src")) {
	        $($(".swiper-wrapper img")[0]).attr("src", $($(".swiper-wrapper img")[0]).attr("data-src"));
	    }
	    if (cookie.get("local_city_pingying") != "") {
	        $(".subject1").attr("href", sub1_href + cookie.get("local_city_pingying"));
	        $(".subject4").attr("href", sub4_href + cookie.get("local_city_pingying"));
	    }
	    $(".swiper-container-banner").css("display", "block");
	    $(".banner_top .swiper-slide img").map(function (i, v) {
	        if ($(v).attr("data-src") == undefined) {
	            $(v).attr("src", $(v).attr("src") + "?h=360&w=" + $(document).width() + "&ss=1&crop=1&cpos=middle");
	            $(v).attr("data-src", $(v).attr("src"));
	        } else {
	            $(v).attr("data-src", $(v).attr("data-src") + "?h=360&w=" + $(document).width() + "&ss=1&crop=1&cpos=middle");
	        }
	    });
	    // 学车指南展示配置
	    var swiper = new Swiper('.swiper-container', {
	        slidesPerView: 3,
	        spaceBetween: 20,
	        slidesPerGroup: 3,
	        width: 1200,
	        loop: true
	        // // 自动播放时间
	        // autoplay: 4000,
	        // // 播放的速度
	        // speed: 10000
	    });
	    $('.swiper-button-prev').click(function () {
	        swiper.swipePrev();
	    });
	    $('.swiper-button-next').click(function () {
	        swiper.swipeNext();
	    });
	    //首页banner轮播展示配置
	    var swiper_banner = new Swiper('.swiper-container-banner', {
	        pagination: '.swiper-pagination',
	        paginationClickable: true,
	        autoplayDisableOnInteraction: false,
	        loop: true,
	        // 自动播放时间
	        autoplay: 4000,
	        // 播放的速度
	        speed: 1000,
	        onSlideChangeStart: function onSlideChangeStart(swiper) {
	            if ($(swiper.imagesToLoad[swiper.activeIndex]).attr("data-src")) {
	                $(swiper.imagesToLoad[swiper.activeIndex]).attr("src", $(swiper.imagesToLoad[swiper.activeIndex]).attr("data-src"));
	            }
	        }
	    });
	    //学车指南tab切换
	    $('.iguide_list_menu ul').find('li').click(function () {
	        $(".iguide_list_menu li").find("a").removeClass('active');
	        $(".iguide_list_menu li").eq($(this).index()).find("a").addClass('active');
	        $('.iguide_article').eq($(this).index()).show().siblings().hide();

	        $(".iguide_article").eq($(this).index()).find(".list_content_detail img").map(function (i, v) {
	            if ($(v).attr("data-src")) {
	                $(v).attr("src", $(v).attr("data-src"));
	            }
	        });
	    });
	});

/***/ })
/******/ ]);